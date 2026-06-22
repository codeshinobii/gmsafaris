@extends('layouts.app')

@section('title', 'Contact Golden Memories Safaris | Tanzania Safari Experts in Arusha')
@section('keywords', 'Contact Golden Memories Safaris, Tanzania safari contact, Arusha tour operator contact, safari booking inquiry, Kilimanjaro contact')
@section('description', 'Ready to plan your Tanzania safari? Contact Golden Memories Safaris in Arusha for expert advice on Serengeti tours, Kilimanjaro climbs & Zanzibar holidays. Get your free custom quote today.')
@section('canonical', 'https://www.gmsafaris.co.tz/contact')
@section('og_title', 'Contact Us - Golden Memories Safaris')
@section('og_description', 'Get in touch with Golden Memories Safaris. Contact us for safari inquiries, Kilimanjaro climbs, Zanzibar holidays, or any questions about traveling to Tanzania.')
@section('og_url', 'https://www.gmsafaris.co.tz/contact')
@section('og_image', site_image('contact_hero'))
@section('twitter_title', 'Contact Us - Golden Memories Safaris')
@section('twitter_description', 'Get in touch with Golden Memories Safaris. Contact us for safari inquiries, Kilimanjaro climbs, Zanzibar holidays, or any questions about traveling to Tanzania.')
@section('twitter_image', site_image('contact_hero'))

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.gmsafaris.co.tz/" },
        { "@type": "ListItem", "position": 2, "name": "Contact Us", "item": "https://www.gmsafaris.co.tz/contact" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Golden Memories Safaris",
    "image": "{{ site_image('logo') }}",
    "url": "https://www.gmsafaris.co.tz",
    "telephone": "+255786383273",
    "email": "info@gmsafaris.co.tz",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Arusha",
        "addressLocality": "Arusha",
        "addressRegion": "Arusha",
        "addressCountry": "TZ"
    },
    "openingHoursSpecification": [
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "08:00",
            "closes": "18:00"
        }
    ],
    "priceRange": "$$",
    "sameAs": [
        "https://www.facebook.com/gmsafaris",
        "https://www.instagram.com/gmsafaris/",
        "https://www.tiktok.com/@gmsafaris",
        "https://www.youtube.com/@gmsafaris"
    ]
}
</script>
@endsection

@section('extra_styles')
<style>
    /* Page Header Style */
    .page-header {
        background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), url({{ site_image('contact_hero') }}) center center no-repeat;
        background-size: cover;
    }

    /* Contact Info Styling */
    .contact-info-item {
        display: flex;
        align-items: center;
        background-color: var(--bs-light);
        padding: 1.5rem;
        border-radius: 0.5rem;
        margin-bottom: 1.5rem;
        transition: box-shadow 0.3s ease;
    }

    .contact-info-item:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }

    .contact-info-item .icon-box {
        flex-shrink: 0;
        width: 60px;
        height: 60px;
        background-color: var(--bs-primary);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 1.5rem;
        margin-right: 1.5rem;
    }

    .contact-info-item h5 {
        margin-bottom: 0.25rem;
        color: var(--bs-dark);
    }

    .contact-info-item p, .contact-info-item a {
        margin-bottom: 0;
        color: #6c757d;
        text-decoration: none;
    }

    .contact-info-item a:hover {
        color: var(--bs-primary);
    }

    /* Map Styling */
    .map-container {
        overflow: hidden;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        margin-top: 2rem;
    }

    .map-container iframe {
        display: block;
    }

    /* Form Styling */
    .contact-form .form-control {
        border-radius: 0.3rem;
        border: 1px solid #ced4da;
        padding: 0.75rem 1rem;
    }

    .contact-form .form-control:focus {
        border-color: var(--bs-primary);
        box-shadow: 0 0 0 0.2rem rgba(var(--bs-primary-rgb), 0.25);
    }

    .contact-form .btn-primary {
        padding: 0.75rem 2rem;
        font-size: 1.1rem;
    }

    /* Footer Logo */
    .footer-logo {
        max-width: 100%;
        height: auto;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
    }

    .py-6 {
        padding-top: 6rem;
        padding-bottom: 6rem;
    }
</style>
@endsection

@section('body_content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get In Touch</small>
                <h1 class="display-5 mb-5">We're Here to Help Plan Your Adventure</h1>
            </div>

            <div class="row g-5">
                <!-- Left Column: Contact Info & Map -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <h3 class="mb-4">Contact Details</h3>
                    <p class="mb-4">Have questions or ready to start planning? Reach out to us using the details below, or fill out the contact form. We aim to respond to all inquiries within 24 hours.</p>

                    <!-- Address -->
                    <div class="contact-info-item shadow-sm">
                        <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h5>Our Office</h5>
                            <p>Sokoine Road, Arusha, Tanzania</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="contact-info-item shadow-sm">
                        <div class="icon-box"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <h5>Call Us</h5>
                            <a href="tel:+255786383273">+255 786 383 273</a>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-info-item shadow-sm">
                        <div class="icon-box"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h5>Email Us</h5>
                            <a href="mailto:info@gmsafaris.co.tz">info@gmsafaris.co.tz</a>
                        </div>
                    </div>

                    <!-- Hours -->
                    <div class="contact-info-item shadow-sm">
                        <div class="icon-box"><i class="fas fa-clock"></i></div>
                        <div>
                            <h5>Office Hours</h5>
                            <p>Monday - Saturday: 8:00 AM - 6:00 PM (EAT)</p>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="map-container wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="mb-3 text-center">Find Us on the Map</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.6747911064217!2d36.702341075784375!3d-3.429116996545406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c49e4ead53d9d%3A0xe1f06df544443923!2sGolden%20Memories%20Safaris!5e0!3m2!1sen!2stz!4v1746522059185!5m2!1sen!2stz" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Right Column: Contact Form -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <h3 class="mb-4">Send Us a Message</h3>
                    <p class="mb-4">Fill out the form below and our safari experts will get back to you shortly.</p>
                    <div class="card border-0 shadow-sm p-4 contact-form">
                        <form id="contactForm" action="{{ route('inquiry.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="_timestamp" value="{{ time() }}">
                            <div style="position: absolute; left: -9999px; opacity: 0;" aria-hidden="true">
                                <input type="text" name="website" tabindex="-1" autocomplete="off" value="">
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="contactName" class="form-label">Your Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="contactName" name="name" placeholder="John Doe" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="contactEmail" class="form-label">Your Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="contactEmail" name="email" placeholder="john.doe@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="contactPhone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="contactPhone" name="phone" placeholder="+255 786 383 273">
                                </div>
                                <div class="col-md-6">
                                    <label for="contactCountry" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="contactCountry" name="country" placeholder="Your Country">
                                </div>
                                <div class="col-12">
                                    <label for="contactSubject" class="form-label">Subject <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="contactSubject" name="subject" placeholder="e.g., Safari Inquiry, Kilimanjaro Question" required>
                                </div>
                                <div class="col-12">
                                    <label for="contactMessage" class="form-label">Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="contactMessage" name="message" rows="6" placeholder="Please describe your inquiry in detail..." required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary rounded-pill px-5 py-3" type="submit">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection

@section('extra_scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('contactForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';

        fetch('{{ route('inquiry.store') }}', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '{{ csrf_token() }}'
            },
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;

                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: 'Thank you for contacting us. We will get back to you shortly.',
                        confirmButtonColor: '#86b817'
                    });
                    document.getElementById('contactForm').reset();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: data.message
                    });
                }
            })
            .catch(error => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while sending your message. Please try again later.'
                });
                console.error('Error:', error);
            });
    });
</script>
<script>
    $(document).ready(function () {
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });

        new WOW().init();
    });
</script>
@endsection
