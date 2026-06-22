<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SafariController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\JoinSafariController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Admin\GalleryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// XML Sitemap — must be before any catch-all routes
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/', [HomeController::class, 'index'])->name('home');

// Main pages
Route::view('/about', 'about')->name('about');
Route::get('/safaris', [SafariController::class, 'index'])->name('safaris');
Route::get('/safaris/search', [SafariController::class, 'search'])->name('safaris.search');
Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/contact', 'contact')->name('contact');
Route::view('/booking', 'booking')->name('booking');

// Multi-step Booking System
Route::get('/booking/create/{slug?}', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/step1', [BookingController::class, 'postStep1'])->name('booking.step1');
Route::post('/booking/step2', [BookingController::class, 'postStep2'])->name('booking.step2');
Route::post('/booking/step3', [BookingController::class, 'postStep3'])->name('booking.step3');
Route::post('/booking/submit', [BookingController::class, 'submit'])->name('booking.submit');
Route::get('/booking/confirmation/{reference}', [BookingController::class, 'confirmation'])->name('booking.confirmation');

// Inquiry System
Route::get('/inquiry/{slug?}', [InquiryController::class, 'create'])->name('inquiry.create');
Route::post('/inquiry', [InquiryController::class, 'store'])
    ->name('inquiry.store')
    ->middleware('throttle:3,10'); // 🛡️ Anti-spam: max 3 submissions per IP every 10 minutes
Route::get('/inquiry/thank-you', [InquiryController::class, 'thankYou'])->name('inquiry.thank-you');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/service', 'service')->name('service');

// Dynamic Safari Detail Route (catch-all for safari slugs)
Route::get('/safari/{slug}', [SafariController::class, 'show'])->name('safari.show');

// Dynamic Destination Detail Route (catch-all for destination slugs)
Route::get('/destination/{slug}', [DestinationController::class, 'show'])->name('destination.show');

// Dynamic Blog Detail Route (catch-all for blog slugs)
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Legacy redirects for old hardcoded safari URLs - redirect to new dynamic route
Route::redirect('/ultimate-tanzanian-escape', '/safari/ultimate-tanzanian-escape', 301);
Route::redirect('/ultimate-tanzania-escape-6days', '/safari/ultimate-tanzanian-escape', 301);
Route::redirect('/taste-of-tanzania', '/safari/taste-of-tanzania', 301);
Route::redirect('/tanzanian-express', '/safari/tanzanian-express', 301);
Route::redirect('/tarangire-ngorongoro-express-2days', '/safari/tarangire-ngorongoro-express-2days', 301);
Route::redirect('/northern-circuit-classic-4days', '/safari/northern-circuit-classic-4days', 301);
Route::redirect('/tanzania-safari-adventure-5days', '/safari/tanzania-safari-adventure-5days', 301);
Route::redirect('/tanzania-semi-luxury-safari-7days', '/safari/tanzania-semi-luxury-safari-7days', 301);
Route::redirect('/tanzania-zanzibar-adventure-12days', '/safari/tanzania-zanzibar-adventure-12days', 301);
Route::redirect('/serengeti-fly-in-3days', '/safari/serengeti-fly-in-3days', 301);
Route::redirect('/selfie-with-white-lion', '/safari/selfie-with-white-lion', 301);
Route::redirect('/golden-safari-5days', '/safari/golden-safari-5days', 301);
Route::redirect('/6-days-ultimate-tanzania-escape', '/safari/ultimate-tanzanian-escape', 301);
Route::redirect('/mikumi-fly-in-day-trip', '/safari/mikumi-fly-in-day-trip', 301);

// Safari types
Route::view('/tailoredsafaris', 'tailoredsafaris')->name('tailoredsafaris');
Route::view('/luxurysafari', 'luxurysafari')->name('luxurysafari');
Route::view('/mountaintrekking', 'mountaintrekking')->name('mountaintrekking');
Route::view('/groupsafaris', 'groupsafaris')->name('groupsafaris');
Route::view('/budgetsafari', 'budgetsafari')->name('budgetsafari');
Route::view('/zanzibarbeachholiday', 'zanzibarbeachholiday')->name('zanzibarbeachholiday');

// Legacy redirects for old hardcoded destination URLs - redirect to new dynamic route
Route::redirect('/arushanationalpark', '/destination/arushanationalpark', 301);
Route::redirect('/serengeti', '/destination/serengeti', 301);
Route::redirect('/ngorongoro', '/destination/ngorongoro', 301);
Route::redirect('/tarangire', '/destination/tarangire', 301);
Route::redirect('/manyara', '/destination/manyara', 301);
Route::redirect('/mtkilimanjaro', '/destination/mtkilimanjaro', 301);
Route::redirect('/mtmeru', '/destination/mtmeru', 301);
Route::redirect('/mtusambara', '/destination/mtusambara', 301);
Route::redirect('/lakenatron', '/destination/lakenatron', 301);
Route::redirect('/lakeeyasi', '/destination/lakeeyasi', 301);
Route::redirect('/lakevictoria', '/destination/lakevictoria', 301);
Route::redirect('/materuni', '/destination/materuni', 301);
Route::redirect('/gombenationalpark', '/destination/gombenationalpark', 301);
Route::redirect('/serval', '/destination/serval', 301);
Route::redirect('/ZanzibarArchipelago', '/destination/ZanzibarArchipelago', 301);

// Legacy redirects for old hardcoded blog URLs - redirect to new dynamic route
Route::redirect('/blog-detail-migration', '/blog/blog-detail-migration', 301);
Route::redirect('/blog-detail-kilimanjaro-prep', '/blog/blog-detail-kilimanjaro-prep', 301);
Route::redirect('/blog-detail-photo-tips', '/blog/blog-detail-photo-tips', 301);
Route::redirect('/blog-detail-zanzibar-beyond-beaches', '/blog/blog-detail-zanzibar-beyond-beaches', 301);

// Information pages
Route::view('/besttimetovisit', 'besttimetovisit')->name('besttimetovisit');
Route::view('/localcustoms', 'localcustoms')->name('localcustoms');
Route::view('/healthandsafety', 'healthandsafety')->name('healthandsafety');
Route::view('/visa', 'visa')->name('visa');
Route::view('/insurance', 'insurance')->name('insurance');
Route::view('/kilimanjaroroutes', 'kilimanjaroroutes')->name('kilimanjaroroutes');
Route::view('/poland', 'poland')->name('poland');
Route::view('/privacypolicy', 'privacypolicy')->name('privacypolicy');
Route::view('/termsandconditions', 'termsandconditions')->name('termsandconditions');
Route::view('/package-details', 'package-details')->name('package-details');

// Join Safari System
Route::get('/join-safari', [JoinSafariController::class, 'index'])->name('join-safari.index');
Route::get('/join-safari/{slug}', [JoinSafariController::class, 'show'])->name('join-safari.show');
Route::post('/join-safari/{slug}/join', [JoinSafariController::class, 'join'])->name('join-safari.join');

// Gallery API (for frontend)
Route::get('/api/gallery', [GalleryController::class, 'apiImages'])->name('api.gallery');
