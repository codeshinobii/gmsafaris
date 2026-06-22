@extends('layouts.app')

@section('title', 'Book Your Tanzania Safari | Free Custom Trip Quote')
@section('keywords', 'Tanzania safari booking, book Kilimanjaro trek, Zanzibar holiday booking, safari inquiry Tanzania, custom safari quote')
@section('description', 'Start planning your dream Tanzania safari today. Get a free personalized quote for Serengeti wildlife tours, Kilimanjaro climbs & Zanzibar beach holidays from Golden Memories Safaris.')
@section('canonical', 'https://www.gmsafaris.co.tz/booking')
@section('og_title', 'Book Your Safari - Golden Memories Safaris')
@section('og_description', 'Start planning your dream Tanzania adventure! Fill out our inquiry form for a personalized safari, Kilimanjaro climb, or Zanzibar holiday quote from Golden Memories Safaris.')
@section('og_url', 'https://www.gmsafaris.co.tz/booking')
@section('og_image', site_image('booking_hero'))
@section('twitter_title', 'Book Your Safari - Golden Memories Safaris')
@section('twitter_description', 'Start planning your dream Tanzania adventure! Fill out our inquiry form for a personalized safari, Kilimanjaro climb, or Zanzibar holiday quote from Golden Memories Safaris.')
@section('twitter_image', site_image('booking_hero'))

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.gmsafaris.co.tz/" },
        { "@type": "ListItem", "position": 2, "name": "Book Your Safari", "item": "https://www.gmsafaris.co.tz/booking" }
    ]
}
</script>
@endsection

@section('extra_styles')
<style>
     /* Page Header Style */
    .page-header {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ site_image('booking_hero') }}') center center no-repeat;
        background-size: cover;
    }

    /* Form Styling Enhancements */
    .booking-form .form-label {
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    .booking-form .form-control,
    .booking-form .form-select {
        border-radius: 0.25rem;
        border: 1px solid #ced4da;
    }
     .booking-form .form-control:focus,
     .booking-form .form-select:focus {
         border-color: var(--bs-primary);
         box-shadow: 0 0 0 0.2rem rgba(var(--bs-primary-rgb), 0.25);
     }
     .booking-form .btn-primary {
         padding: 0.75rem 1.5rem;
         font-size: 1.1rem;
     }

     /* Footer Logo */
     .footer-logo {
       max-width: 100%;
       height: auto;
       filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
     }
     /* Consistent section padding */
     .py-6 {
         padding-top: 6rem;
         padding-bottom: 6rem;
     }
     .bg-light.py-6 {
         padding-top: 5.5rem;
         padding-bottom: 5.5rem;
     }
     .process-step { text-align: center; padding: 2rem; }
     .process-step .icon-circle { width: 80px; height: 80px; background-color: var(--bs-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; }
</style>
@endsection

@section('body_content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Booking Inquiry</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Booking</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Booking Process Start -->
    <div class="container-fluid booking-process-section py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 mb-3">How Our Booking Process Works</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Planning your dream safari is easy! Here are the simple steps from inquiry to adventure:</p>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Step 1: Inquiry -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="icon-circle shadow">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <h5>Step 1: Send Your Inquiry</h5>
                        <p>Fill out the detailed form below or contact us directly with your travel ideas, dates, interests, and group size.</p>
                    </div>
                </div>
                <!-- Step 2: Consultation & Proposal -->
                <div class="col-lg-3 col-md-6">
                     <div class="process-step">
                        <div class="icon-circle shadow">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h5>Step 2: Expert Consultation</h5>
                        <p>One of our dedicated safari specialists will contact you to discuss your trip, refine details, and answer questions.</p>
                    </div>
                </div>
                <!-- Step 3: Itinerary & Quote -->
                <div class="col-lg-3 col-md-6">
                     <div class="process-step">
                        <div class="icon-circle shadow">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <h5>Step 3: Custom Proposal</h5>
                        <p>You'll receive a personalized day-by-day itinerary and a detailed quote based on our discussion.</p>
                    </div>
                </div>
                <!-- Step 4: Confirm & Prepare -->
                <div class="col-lg-3 col-md-6">
                     <div class="process-step">
                        <div class="icon-circle shadow">
                           <i class="fas fa-check-circle"></i>
                        </div>
                        <h5>Step 4: Confirm & Prepare</h5>
                        <p>Review, request adjustments if needed, confirm your booking with a deposit, and get ready for your adventure!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Process End -->
    <!-- Booking Form Start -->
    <div class="container-fluid py-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center mb-5">
                         <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Plan Your Adventure</small>
                        <h1 class="display-5 mb-3">Tell Us About Your Dream Trip</h1>
                        <p class="lead text-muted">
                           Ready to start planning your unforgettable Tanzanian experience? Please fill out the form below with as much detail as possible. This helps us understand your preferences and craft the perfect itinerary and quote for you. This is an inquiry, not a final booking – one of our safari experts will contact you shortly!
                        </p>
                    </div>

                    <div class="card shadow-sm border-light p-4 p-md-5 booking-form">
                        <form id="bookingForm" action="{{ route('inquiry.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="_timestamp" value="{{ time() }}">
                            <div style="position: absolute; left: -9999px; opacity: 0;" aria-hidden="true">
                                <input type="text" name="website" tabindex="-1" autocomplete="off" value="">
                            </div>
                            <h4 class="mb-4 text-primary border-bottom pb-2"><i class="fas fa-user-circle me-2"></i>Your Contact Information</h4>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fullName" name="name" placeholder="Enter your full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number (Optional)</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Include country code">
                                </div>
                                 <div class="col-md-6">
                                    <label for="country" class="form-label">Country of Residence <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="country" name="country" placeholder="Enter your country" required>
                                </div>
                            </div>

                            <h4 class="mt-5 mb-4 text-primary border-bottom pb-2"><i class="fas fa-map-signs me-2"></i>Trip Details</h4>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label for="tripType" class="form-label">Type of Trip <span class="text-danger">*</span></label>
                                    <select class="form-select" id="tripType" name="trip_type" required>
                                        <option selected disabled value="">Please select...</option>
                                        <option value="Wildlife Safari">Wildlife Safari (Parks)</option>
                                        <option value="Kilimanjaro Trek">Kilimanjaro Trek</option>
                                        <option value="Zanzibar Beach">Zanzibar Beach Holiday</option>
                                        <option value="Safari & Zanzibar Combo">Safari & Zanzibar Combo</option>
                                        <option value="Cultural Tour">Cultural Tour</option>
                                        <option value="Mount Meru Trek">Mount Meru Trek</option>
                                        <option value="Custom / Other">Custom / Other (Describe below)</option>
                                    </select>
                                </div>
                                 <div class="col-md-6">
                                    <label for="destinations" class="form-label">Preferred Destinations (Optional)</label>
                                    <input type="text" class="form-control" id="destinations" name="destinations" placeholder="e.g., Serengeti, Ngorongoro, Tarangire">
                                     <small class="form-text text-muted">Leave blank if unsure or flexible.</small>
                                </div>
                                <div class="col-md-6">
                                    <label for="travelDates" class="form-label">Preferred Travel Dates / Month <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="travelDates" name="travel_dates" placeholder="e.g., July 2024, or Mid-September" required>
                                     <small class="form-text text-muted">Approximate dates are fine if you're flexible.</small>
                                </div>
                                <div class="col-md-6">
                                    <label for="duration" class="form-label">Desired Trip Duration <span class="text-danger">*</span></label>
                                    <select class="form-select" id="duration" name="duration" required>
                                         <option selected disabled value="">Please select...</option>
                                         <option value="3-5 Days">3-5 Days</option>
                                         <option value="6-8 Days">6-8 Days</option>
                                         <option value="9-12 Days">9-12 Days</option>
                                         <option value="13-15 Days">13-15 Days</option>
                                         <option value="16+ Days">16+ Days</option>
                                          <option value="Flexible">Flexible</option>
                                    </select>
                                </div>
                                  <div class="col-md-6">
                                    <label for="adults" class="form-label">Number of Adults (18+) <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="adults" name="adults" min="1" value="2" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="children" class="form-label">Number of Children (0-17)</label>
                                    <input type="number" class="form-control" id="children" name="children" min="0" value="0">
                                    <small class="form-text text-muted">If children are traveling, please provide ages in the comments below.</small>
                                </div>
                                 <div class="col-md-12">
                                    <label for="accommodation" class="form-label">Preferred Accommodation Style <span class="text-danger">*</span></label>
                                    <select class="form-select" id="accommodation" name="accommodation" required>
                                        <option selected disabled value="">Please select...</option>
                                        <option value="Budget Camping">Budget Camping (Basic)</option>
                                        <option value="Mid-Range Lodges/Tented Camps">Mid-Range Lodges / Tented Camps (Comfortable)</option>
                                        <option value="Luxury Tented Camps">Luxury Tented Camps (Semi-Luxury)</option>
                                        <option value="Premium Lodges">Premium / Luxury Lodges (High-End)</option>
                                        <option value="Mixed Styles">Mix of Styles</option>
                                        <option value="Unsure / Recommendations Welcome">Unsure / Recommendations Welcome</option>
                                    </select>
                                </div>
                            </div>

                            <h4 class="mt-5 mb-4 text-primary border-bottom pb-2"><i class="fas fa-info-circle me-2"></i>Additional Information</h4>
                            <div class="row g-3">
                                 <div class="col-12">
                                    <label for="comments" class="form-label">Specific Interests, Requirements, or Questions</label>
                                    <textarea class="form-control" id="comments" name="message" rows="5" placeholder="Tell us more! e.g., Special occasions (honeymoon, anniversary), specific animals you hope to see, dietary needs, accessibility requirements, children's ages, preferred activities (balloon safari, walking safari), budget ideas (optional), etc." required></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="heardAboutUs" class="form-label">How did you hear about us? (Optional)</label>
                                     <select class="form-select" id="heardAboutUs" name="heard_about_us">
                                         <option selected disabled value="">Please select...</option>
                                         <option value="Google Search">Google Search</option>
                                         <option value="Social Media (Facebook, Instagram, etc.)">Social Media (Facebook, Instagram, etc.)</option>
                                         <option value="Friend/Family Recommendation">Friend/Family Recommendation</option>
                                         <option value="Travel Blog/Website">Travel Blog/Website</option>
                                         <option value="Online Advertisement">Online Advertisement</option>
                                         <option value="SafariBookings / TourRadar / etc.">SafariBookings / TourRadar / etc.</option>
                                         <option value="Other">Other</option>
                                     </select>
                                </div>
                            </div>

                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-primary rounded-pill px-5 py-3"><i class="fas fa-paper-plane me-2"></i>Send My Inquiry</button>
                                <p class="mt-3 text-muted"><small>By submitting this form, you agree to our <a href="{{ route('privacypolicy') }}" target="_blank">Privacy Policy</a>.</small></p>
                            </div>
                        </form>
                    </div>

                    <div class="text-center mt-5">
                         <p class="lead">Prefer to talk directly? Call us or send an email:</p>
                         <p><i class="fa fa-phone-alt text-primary me-2"></i><a href="tel:+255786383273">+255 786 383 273</a></p>
                         <p><i class="fas fa-envelope text-primary me-2"></i><a href="mailto:info@gmsafaris.co.tz">info@gmsafaris.co.tz</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Form End -->

@endsection

@section('extra_scripts')
<script>
    $(document).ready(function(){
         lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true
        });

        new WOW().init();
    });
</script>
<script>
$(function(){
  $('#bookingForm').on('submit', function(e){
    e.preventDefault();
    var form = $(this);
    $.ajax({
      url: '{{ route('inquiry.store') }}',
      type: 'POST',
      data: form.serialize(),
      dataType: 'json',
      success: function(resp){
        if(resp.success){
          alert(resp.message);
          form[0].reset();
        } else {
          alert('Error: ' + resp.message);
        }
      },
      error: function(xhr){
        alert('There was a problem sending your message.\n' + xhr.responseText);
      }
    });
  });
});
</script>
@endsection
