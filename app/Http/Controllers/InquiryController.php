<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Safari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    /**
     * Show the inquiry form.
     * Optional $slug pre-fills the package reference.
     */
    public function create($slug = null)
    {
        $safaris = Safari::active()->published()->ordered()->get();
        $selectedSafari = null;

        if ($slug) {
            $selectedSafari = Safari::where('slug', $slug)->active()->published()->first();
        }

        return view('inquiry.create', compact('safaris', 'selectedSafari'));
    }

    /**
     * Store a new inquiry.
     */
    public function store(Request $request)
    {
        // ═══════════════════════════════════════════
        // 🛡️ SPAM DEFENSE LAYER 1: Honeypot trap
        // Bots auto-fill every form field they find. Humans never see this.
        // ═══════════════════════════════════════════
        if (!empty($request->input('website'))) {
            return $this->fakeSuccess($request);
        }

        // ═══════════════════════════════════════════
        // 🛡️ SPAM DEFENSE LAYER 2: Time gate
        // Humans need at least 5 seconds to fill a form.
        // ═══════════════════════════════════════════
        $timestamp = $request->input('_timestamp');
        if ($timestamp && is_numeric($timestamp)) {
            $elapsed = time() - (int) $timestamp;
            if ($elapsed < 5) {
                return $this->fakeSuccess($request);
            }
        }

        // ═══════════════════════════════════════════
        // 🛡️ SPAM DEFENSE LAYER 3: Gibberish pattern detection
        // Catches random consonant-heavy strings like "zjvfjneldlknl"
        // ═══════════════════════════════════════════
        $spamFields = [
            $request->input('name', ''),
            $request->input('country', ''),
            $request->input('subject', ''),
            $request->input('message', ''),
        ];
        foreach ($spamFields as $field) {
            if ($this->isSpamGibberish($field)) {
                \Log::info('Spam blocked (gibberish pattern)', [
                    'ip' => $request->ip(),
                    'name' => $request->input('name'),
                ]);
                return $this->fakeSuccess($request);
            }
        }

        // ═══════════════════════════════════════════
        // 🛡️ SPAM DEFENSE LAYER 4: Email-in-name check
        // Bots sometimes stuff emails into the name field
        // ═══════════════════════════════════════════
        $name = $request->input('name', '');
        if (filter_var($name, FILTER_VALIDATE_EMAIL) || str_contains($name, '@')) {
            return $this->fakeSuccess($request);
        }

        // ═══════════════════════════════════════════
        // ✅ Legitimate submission — validate and store
        // ═══════════════════════════════════════════
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'country' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'safari_id' => 'nullable|exists:safaris,id',
            'message' => 'required|string|max:5000',
        ]);

        $inquiry = Inquiry::create($validated);

        try {
            $this->sendInquiryNotifications($inquiry);
        } catch (\Exception $e) {
            // Continue even if email fails
        }

        // Return JSON for AJAX requests (used by contact, kilimanjaroroutes, zanzibarbeachholiday forms)
        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your inquiry has been sent. We will contact you within 24 hours.',
                'inquiry_name' => $inquiry->name,
            ]);
        }

        return redirect()->route('inquiry.thank-you')
            ->with('success', 'Thank you! Your inquiry has been sent. We will contact you within 24 hours.')
            ->with('inquiry_name', $inquiry->name);
    }

    /**
     * Return a fake success response so bots don't know they were blocked.
     * This prevents them from adapting their strategy.
     */
    private function fakeSuccess(Request $request)
    {
        \Log::info('Spam inquiry blocked', [
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your inquiry has been sent. We will contact you within 24 hours.',
                'inquiry_name' => 'Guest',
            ]);
        }

        return redirect()->route('inquiry.thank-you')
            ->with('success', 'Thank you! Your inquiry has been sent.')
            ->with('inquiry_name', 'Guest');
    }

    /**
     * Detect gibberish/spam patterns in a text string.
     * Real names/countries/subjects have a natural vowel-to-consonant ratio.
     * Bot-generated strings are overwhelmingly consonants.
     */
    private function isSpamGibberish(string $text): bool
    {
        // Strip everything except letters
        $cleaned = preg_replace('/[^a-zA-Z]/', '', $text);
        if (strlen($cleaned) < 6) {
            return false; // Too short to meaningfully analyze
        }

        $len = strlen($cleaned);
        $vowels = preg_match_all('/[aeiouAEIOU]/', $cleaned);
        $consonants = $len - $vowels;
        $vowelRatio = $len > 0 ? $vowels / $len : 0;

        // 1. If more than 80% consonants on a string 10+ chars, it's gibberish
        if ($len >= 10 && $vowelRatio < 0.20) {
            return true;
        }

        // 2. If more than 85% consonants on 8+ chars, it's gibberish
        if ($len >= 8 && $vowelRatio < 0.15) {
            return true;
        }

        // 3. Check for a single character repeated 4+ times consecutively
        if (preg_match('/([a-zA-Z])\1{3,}/', $cleaned)) {
            return true;
        }

        // 4. Check for alternating consonant patterns with no real words
        // Real text has vowel clusters. Gibberish rarely does.
        if ($len >= 12 && !preg_match('/[aeiou]{2,}/i', $cleaned) && $vowelRatio < 0.25) {
            return true;
        }

        return false;
    }

    /**
     * Show the thank you page after inquiry submission.
     */
    public function thankYou()
    {
        $name = session('inquiry_name', '');
        return view('inquiry.thank-you', compact('name'));
    }

    /**
     * Send inquiry notification emails.
     */
    private function sendInquiryNotifications(Inquiry $inquiry): void
    {
        try {
            $adminEmail = env('MAIL_ADMIN_ADDRESS', 'info@gmsafaris.co.tz');
            $safariName = $inquiry->safari ? $inquiry->safari->title : 'General Inquiry';

            // Notify admin
            Mail::send('emails.admin.inquiry', ['inquiry' => $inquiry, 'safariName' => $safariName], function ($message) use ($adminEmail, $inquiry) {
                $message->to($adminEmail)
                    ->subject('Action Required: New Inquiry from ' . $inquiry->name)
                    ->from(env('MAIL_FROM_ADDRESS', 'noreply@gmsafaris.co.tz'), 'Golden Memories Safaris');
            });

            // Auto-reply to customer
            Mail::send('emails.customer.inquiry', ['inquiry' => $inquiry, 'safariName' => $safariName], function ($message) use ($inquiry) {
                $message->to($inquiry->email, $inquiry->name)
                    ->subject('Thank You for Your Inquiry — Golden Memories Safaris')
                    ->from(env('MAIL_FROM_ADDRESS', 'noreply@gmsafaris.co.tz'), 'Golden Memories Safaris');
            });
        } catch (\Throwable $e) {
            \Log::error('Inquiry email failed: ' . $e->getMessage());
        }
    }
}
