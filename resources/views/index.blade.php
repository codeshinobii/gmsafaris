@extends('layouts.app')

@section('title', 'Golden Memories Safaris | Premium Tanzania Safari Tours & Wildlife Adventures')
@section('keywords', 'Tanzania safari, Serengeti tours, Kilimanjaro climbs, Zanzibar holidays, wildlife adventures, Golden Memories Safaris')
@section('description', 'Experience the best Tanzania safari tours with Golden Memories Safaris. Expert-guided Serengeti wildlife adventures, Kilimanjaro treks & Zanzibar beach holidays. Book your dream African safari today.')
@section('canonical', 'https://www.gmsafaris.co.tz/')
@section('og_title', 'Golden Memories Safaris | Premium Tanzania Safari Tours')
@section('og_description', 'Golden Memories Safaris - Premium Tanzania safari tours, wildlife adventures, Kilimanjaro treks, and Zanzibar escapes. Create lifelong memories.')
@section('og_url', 'https://www.gmsafaris.co.tz/')
@section('og_image', site_image('og_default'))
@section('twitter_title', 'Golden Memories Safaris | Premium Tanzania Safari Tours')
@section('twitter_description', 'Golden Memories Safaris - Premium Tanzania safari tours, wildlife adventures, Kilimanjaro treks, and Zanzibar escapes. Create lifelong memories.')
@section('twitter_image', site_image('og_default'))

@section('extra_styles')
<style>
    /* ═══════════════════════════════════════════
       HERO SECTION — Dramatic Full-Screen Carousel
       ═══════════════════════════════════════════ */
    .hero-section {
        position: relative;
        overflow: hidden;
        padding: 0;
        background-color: #111;
    }

    .hero-carousel .owl-item {
        height: 90vh;
        min-height: 500px;
        position: relative;
    }

    .hero-carousel .carousel-image-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .hero-carousel .carousel-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.45);
    }

    /* Dark gradient overlay for drama + reading legibility */
    .hero-carousel .carousel-image-container::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.1) 70%, transparent 100%);
        z-index: 1;
    }

    .hero-carousel .carousel-caption-gms {
        position: absolute;
        top: 50%;
        left: 8%;
        right: auto;
        transform: translateY(-50%);
        text-align: left;
        color: #fff;
        z-index: 3;
        width: auto;
        max-width: 50%;
        padding: 0;
    }

    .hero-carousel .carousel-caption-gms h1 {
        color: #fff;
        font-size: 5rem;
        font-weight: 900;
        letter-spacing: 1px;
        margin-bottom: 1.2rem;
        text-shadow: 0 4px 16px rgba(0, 0, 0, 0.7);
    }

    .hero-carousel .carousel-caption-gms .gold-text {
        color: #d69c40;
        text-shadow: 0 0 30px rgba(214, 156, 64, 0.4);
    }

    .hero-carousel .carousel-caption-gms p {
        font-size: 1.4rem;
        line-height: 1.7;
        font-weight: 400;
        margin-bottom: 2.2rem;
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.6);
    }

    /* Owl Dots — Modern Pill Indicators */
    .hero-carousel .owl-nav { display: none !important; }

    .owl-carousel.hero-carousel .owl-dots {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 3;
        display: flex !important;
        align-items: center;
        justify-content: center;
        gap: 5px;
        margin: 0;
        padding: 0;
    }

    .owl-carousel.hero-carousel .owl-dots button.owl-dot {
        background: none !important;
        border: none !important;
        padding: 0 !important;
        margin: 0 !important;
        outline: none !important;
        box-shadow: none !important;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .owl-carousel.hero-carousel .owl-dots button.owl-dot span {
        display: block !important;
        background: rgba(255, 255, 255, 0.35) !important;
        width: 18px !important;
        height: 3px !important;
        margin: 0 !important;
        border-radius: 2px !important;
        border: none !important;
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) !important;
        padding: 0 !important;
    }

    .owl-carousel.hero-carousel .owl-dots button.owl-dot.active span {
        background: #d69c40 !important;
        width: 36px !important;
        height: 3px !important;
        box-shadow: 0 0 8px rgba(214, 156, 64, 0.5);
    }

    .owl-carousel.hero-carousel .owl-dots button.owl-dot:hover span {
        background: rgba(214, 156, 64, 0.7) !important;
    }

    /* ── Tablet & Mobile (≤992px) ── */
    @media (max-width: 992px) {
        .hero-carousel .carousel-caption-gms {
            left: 5%;
            right: auto;
            top: 50%;
            transform: translateY(-50%);
            max-width: 90%;
            margin: 0;
            text-align: left;
            padding: 0;
        }
        .hero-carousel .carousel-caption-gms h1 {
            font-size: 3.2rem;
            letter-spacing: 0.5px;
            margin-bottom: 0.8rem;
        }
        .hero-carousel .carousel-caption-gms p {
            font-size: 1.1rem;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }
        .hero-carousel .owl-item {
            height: 70vh;
            min-height: 400px;
        }
        .hero-carousel .carousel-caption-gms .btn {
            font-size: 0.9rem;
            padding: 10px 22px !important;
        }
        .hero-carousel .carousel-caption-gms .d-flex {
            justify-content: flex-start !important;
        }
    }

    /* ── Mobile Small (≤480px) ── */
    @media (max-width: 480px) {
        .hero-carousel .carousel-caption-gms {
            left: 4%;
            right: auto;
            top: 50%;
            transform: translateY(-50%);
            max-width: 92%;
            margin: 0;
            text-align: left;
            padding: 0;
        }
        .hero-carousel .carousel-caption-gms h1 {
            font-size: 2.6rem;
            letter-spacing: 0.5px;
            margin-bottom: 0.6rem;
        }
        .hero-carousel .carousel-caption-gms p {
            font-size: 1rem;
            line-height: 1.4;
            margin-bottom: 1rem;
        }
        .hero-carousel .owl-item {
            height: 60vh;
            min-height: 380px;
        }
        .hero-carousel .carousel-caption-gms .btn {
            font-size: 0.85rem;
            padding: 9px 18px !important;
        }
        .hero-carousel .carousel-caption-gms .d-flex {
            justify-content: flex-start !important;
        }
    }

    /* Booking section images — desktop only */
    @media (max-width: 767px) {
        .booking-side-image { display: none !important; }
    }
    @media (min-width: 768px) {
        .booking-side-image { display: block; }
    }

    .gold-btn {
        background-color: #d69c40 !important;
        color: white !important;
        border-color: #d69c40 !important;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        text-decoration: none;
    }

    .gold-outline-btn {
        color: #d69c40 !important;
        border: 2px solid #d69c40 !important;
        background: transparent;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        text-decoration: none;
    }

    .gold-outline-btn:hover {
        background-color: #d69c40 !important;
        color: white !important;
    }


    .footer-logo {
        max-width: 100%;
        height: auto;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
    }

    .service-item {
        transition: transform 0.3s ease;
    }

    .service-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .15) !important;
    }

    .service-icon {
        text-align: center;
    }

    .service-content {
        text-align: center;
    }

    .service-link-v5 {
        display: block;
        text-decoration: none;
        color: inherit;
        height: 100%;
        border-radius: 0.5rem;
        transition: all 0.3s ease-in-out;
    }

    .service-card-v5 {
        background-color: #fff;
        padding: 2rem 1.5rem;
        border-radius: 0.5rem;
        text-align: center;
        height: 100%;
        border: 1px solid #eee;
        display: flex;
        flex-direction: column;
        align-items: center;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
    }

    .service-link-v5:hover .service-card-v5 {
        transform: translateY(-8px);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
        border-color: var(--bs-primary);
    }

    .service-icon-v5 {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background-color: var(--bs-primary);
        color: white;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
    }

    .service-icon-v5 i {
        font-size: 2.2rem;
        line-height: 1;
    }

    .service-text-v5 h4 {
        margin-bottom: 0.75rem;
        font-size: 1.3rem;
        color: var(--bs-dark);
        font-weight: 600;
    }

    .service-text-v5 p {
        color: #6c757d;
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 1rem;
        flex-grow: 1;
    }

    .service-text-v5 .learn-more {
        color: var(--bs-primary);
        font-weight: 600;
        font-size: 0.9rem;
        display: inline-block;
        margin-top: auto;
        transition: color 0.2s ease;
    }

    .service-link-v5:hover .learn-more {
        color: var(--bs-secondary);
    }

    .service-link-v5:hover {
        color: inherit;
    }

    @media (min-width: 992px) {
        .service-card-v5 {
            padding: 1.5rem 0.75rem;
        }

        .service-icon-v5 {
            width: 55px;
            height: 55px;
            margin-bottom: 1rem;
        }

        .service-icon-v5 i {
            font-size: 1.8rem;
        }

        .service-text-v5 h4 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .service-text-v5 p {
            font-size: 0.85rem;
            line-height: 1.5;
            margin-bottom: 0.75rem;
        }

        .service-text-v5 .learn-more {
            font-size: 0.8rem;
        }
    }

    @media (min-width: 1200px) {
        .service-text-v5 h4 {
            font-size: 1.15rem;
        }
    }

    .destination-card-v2 {
        display: block;
        position: relative;
        overflow: hidden;
        border-radius: 0.5rem;
        height: 400px;
        text-decoration: none;
        color: white;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #333;
    }

    .destination-card-v2:hover {
        transform: translateY(-8px);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
    }

    .destination-card-v2 .card-img-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .destination-card-v2 .card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .destination-card-v2:hover .card-img {
        transform: scale(1.08);
    }

    .destination-card-v2 .card-title-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 1.5rem;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.7) 50%, rgba(0, 0, 0, 0) 100%);
        z-index: 2;
    }

    .destination-card-v2 .card-title {
        font-size: 1.75rem;
        font-weight: 600;
        margin: 0;
        line-height: 1.2;
        color: #fff;
    }

    .destination-card-v2 .card-subtitle {
        font-size: 0.9rem;
        font-weight: 300;
        color: rgba(255, 255, 255, 0.8);
        margin-top: 0.25rem;
        display: block;
    }


    .destination-card-v2 .card-hover-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 3;
        text-align: center;
        padding: 1.5rem;
    }

    .destination-card-v2:hover .card-hover-overlay {
        opacity: 1;
    }

    .destination-card-v2 .hover-text {
        font-size: 0.95rem;
        margin-bottom: 1rem;
        color: rgba(255, 255, 255, 0.9);
    }

    .destination-card-v2 .btn-explore {
        background-color: var(--bs-primary);
        color: white;
        border: none;
        padding: 0.6rem 1.2rem;
        border-radius: 50rem;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
        transition: background-color 0.2s ease;
    }

    .destination-card-v2 .btn-explore:hover {
        background-color: var(--bs-secondary);
        color: white;
    }

    @media (max-width: 768px) {
        .destination-card-v2 {
            height: 350px;
        }

        .destination-card-v2 .card-title {
            font-size: 1.5rem;
        }
    }

    /* ═══════════════════════════════════════════
       MINIMAL SAFARI CARDS (Homepage)
       ═══════════════════════════════════════════ */
    .safari-card-min {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .safari-card-min:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    }
    .safari-card-min .card-img-wrap {
        position: relative;
        height: 200px;
        overflow: hidden;
    }
    .safari-card-min .card-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    .safari-card-min:hover .card-img-wrap img {
        transform: scale(1.04);
    }
    .safari-card-min .duration-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        background: rgba(0,0,0,0.7);
        color: #fff;
        font-size: 0.75rem;
        font-weight: 600;
        padding: 4px 12px;
        border-radius: 20px;
        backdrop-filter: blur(4px);
    }
    .safari-card-min .price-badge {
        position: absolute;
        bottom: 12px;
        right: 12px;
        background: rgba(0,0,0,0.65);
        color: #d69c40;
        font-size: 0.95rem;
        font-weight: 700;
        padding: 4px 12px;
        border-radius: 6px;
        backdrop-filter: blur(4px);
        line-height: 1.2;
        text-align: right;
    }
    .safari-card-min .price-badge small {
        display: block;
        font-size: 0.6rem;
        font-weight: 400;
        color: rgba(255,255,255,0.7);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .safari-card-min .card-body {
        padding: 1.25rem;
        display: flex;
        flex-direction: column;
        flex: 1;
    }
    .safari-card-min .card-body h4 {
        font-size: 1.05rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }
    .safari-card-min .card-body p {
        font-size: 0.85rem;
        color: #666;
        line-height: 1.55;
        flex: 1;
        margin-bottom: 0;
    }
    .safari-card-min .card-footer {
        display: flex;
        gap: 8px;
        padding: 0 1.25rem 1.25rem;
    }
    .safari-card-min .card-footer .btn {
        flex: 1;
        font-size: 0.8rem;
        font-weight: 600;
        border-radius: 8px;
        padding: 8px 0;
    }
    .safari-card-min .card-footer .btn-outline-primary {
        border-width: 2px;
    }

</style>
@endsection

@section('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "Golden Memories Safaris",
  "url": "https://www.gmsafaris.co.tz",
  "logo": "{{ site_image('logo') }}",
  "image": "{{ site_image('home_hero_1') }}",
  "description": "Golden Memories Safaris is a premier tour operator based in Arusha, Tanzania, specializing in wildlife safaris, Kilimanjaro treks, Zanzibar holidays, and cultural tours.",
  "telephone": "+255786383273",
  "email": "info@gmsafaris.co.tz",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Sokoine Road",
    "addressLocality": "Arusha",
    "addressCountry": "TZ"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -3.429117,
    "longitude": 36.702341
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
    "opens": "08:00",
    "closes": "18:00"
  },
  "sameAs": [
    "https://www.facebook.com/gmsafaris",
    "https://www.instagram.com/gmsafaris/",
    "https://www.tiktok.com/@gmsafaris",
    "https://www.youtube.com/@gmsafaris"
  ],
  "priceRange": "$$",
  "areaServed": {
    "@type": "Country",
    "name": "Tanzania"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Safari Packages",
    "itemListElement": [
      {"@type": "Offer", "itemOffered": {"@type": "TouristTrip", "name": "Ultimate Tanzanian Escape", "description": "6-day journey through Tarangire, Serengeti, Ngorongoro"}},
      {"@type": "Offer", "itemOffered": {"@type": "TouristTrip", "name": "A Taste of Tanzania", "description": "3-day tour featuring Ngorongoro Crater and Arusha culture"}},
      {"@type": "Offer", "itemOffered": {"@type": "TouristTrip", "name": "Tanzanian Express", "description": "2-day fly-in safari from Zanzibar"}}
    ]
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Golden Memories Safaris",
  "url": "https://www.gmsafaris.co.tz",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.gmsafaris.co.tz/safaris/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
@endsection

@section('body_content')

<!-- Hero Start - Carousel -->
<div class="container-fluid hero-section p-0">
    <div class="owl-carousel hero-carousel">
        <!-- Slide 1 -->
        <div class="item">
            <div class="carousel-image-container">
                <img src="{{ site_image('home_hero_1') }}"
                     srcset="{{ site_image('home_hero_1_480w') }} 480w,
                             {{ site_image('home_hero_1_768w') }} 768w,
                             {{ site_image('home_hero_1') }} 1920w"
                     sizes="100vw"
                     alt="{{ site_image_attr('home_hero_1', 'alt_text', 'Tanzania Wildlife Safari Encounter in Serengeti National Park') }}" width="1920" height="900" fetchpriority="high">
            </div>
            <div class="carousel-caption-gms">
                <h1 class="animated bounceInDown">#Visit <span class="gold-text">Tanzania</span></h1>
                <p class="animated bounceInUp">Expert-guided safaris across Serengeti, Ngorongoro, and Tanzania&#039;s most iconic parks. Your African adventure starts here with guides who know every trail.</p>
                <div class="d-flex flex-wrap justify-content-start gap-3 animated bounceInUp">
                    <a href="{{ route('booking') }}" class="btn gold-btn border-0 rounded-pill py-2 py-lg-3 px-4 px-md-5">Book
                        Safari</a>
                    <a href="{{ route('safaris') }}"
                        class="btn gold-outline-btn border-2 rounded-pill py-2 py-lg-3 px-4 px-md-5">Explore
                        Tours</a>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="item">
            <div class="carousel-image-container">
                <img src="{{ site_image('home_hero_2') }}"
                     srcset="{{ site_image('home_hero_2_480w') }} 480w,
                             {{ site_image('home_hero_2_768w') }} 768w,
                             {{ site_image('home_hero_2') }} 1920w"
                     sizes="100vw"
                     alt="{{ site_image_attr('home_hero_2', 'alt_text', 'Maasai People Tanzania Cultural Experience') }}" width="1920" height="900" loading="lazy">
            </div>
            <div class="carousel-caption-gms">
                <h1 class="animated bounceInDown">Karibu <span class="gold-text">Tanzania</span></h1>
                <p class="animated bounceInUp">From the wild savannas to the shores of Zanzibar &mdash; every corner of Tanzania promises new discoveries in culture and wildlife.</p>
                <div class="d-flex flex-wrap justify-content-start gap-3 animated bounceInUp">
                    <a href="{{ route('destinations') }}"
                        class="btn gold-btn border-0 rounded-pill py-2 py-lg-3 px-4 px-md-5">Discover
                        Destinations</a>
                    <a href="{{ route('contact') }}"
                        class="btn gold-outline-btn border-2 rounded-pill py-2 py-lg-3 px-4 px-md-5">Contact Us</a>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="item">
            <div class="carousel-image-container">
                <img src="{{ site_image('home_hero_3') }}"
                     srcset="{{ site_image('home_hero_3_480w') }} 480w,
                             {{ site_image('home_hero_3_768w') }} 768w,
                             {{ site_image('home_hero_3') }} 1920w"
                     sizes="100vw"
                     alt="{{ site_image_attr('home_hero_3', 'alt_text', 'Serengeti Safari Adventure Wildlife Viewing') }}" width="1920" height="900" loading="lazy">
            </div>
            <div class="carousel-caption-gms">
                <h1 class="animated bounceInDown">Unforgettable <span class="gold-text">Encounters</span></h1>
                <p class="animated bounceInUp">Encounter the Big Five and witness the Great Migration up close. Moments you&#039;ll treasure for a lifetime and photos you&#039;ll never forget.</p>
                <div class="d-flex flex-wrap justify-content-start gap-3 animated bounceInUp">
                    <a href="{{ route('gallery') }}" class="btn gold-btn border-0 rounded-pill py-2 py-lg-3 px-4 px-md-5">View
                        Gallery</a>
                    <a href="{{ route('safaris') }}"
                        class="btn gold-outline-btn border-2 rounded-pill py-2 py-lg-3 px-4 px-md-5">Our Safaris</a>
                </div>
            </div>
        </div>
        <!-- Slide 4 -->
        <div class="item">
            <div class="carousel-image-container">
                <img src="{{ site_image('home_hero_4') }}"
                     srcset="{{ site_image('home_hero_4_480w') }} 480w,
                             {{ site_image('home_hero_4_768w') }} 768w,
                             {{ site_image('home_hero_4') }} 1920w"
                     sizes="100vw"
                     alt="{{ site_image_attr('home_hero_4', 'alt_text', 'Ngorongoro Crater Safari Vehicle Wildlife Viewing') }}" width="1920" height="900" loading="lazy">
            </div>
            <div class="carousel-caption-gms">
                <h1 class="animated bounceInDown">Experience <span class="gold-text">Ngorongoro</span></h1>
                <p class="animated bounceInUp">Descend into Ngorongoro Crater, a UNESCO World Heritage site teeming with wildlife unlike anywhere on Earth. Every turn reveals something extraordinary.</p>
                <div class="d-flex flex-wrap justify-content-start gap-3 animated bounceInUp">
                    <a href="{{ url('/ngorongoro') }}"
                        class="btn gold-btn border-0 rounded-pill py-2 py-lg-3 px-4 px-md-5">Explore Ngorongoro</a>
                    <a href="{{ route('booking') }}"
                        class="btn gold-outline-btn border-2 rounded-pill py-2 py-lg-3 px-4 px-md-5">Plan Your
                        Trip</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- About Satrt -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <img src="{{ site_image('about_section') }}" class="img-fluid rounded" alt="{{ site_image_attr('about_section', 'alt_text', 'About Golden Memories Safaris') }}"
                    width="600" height="400" loading="lazy">
            </div>
            <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About
                    Us</small>
                <h1 class="display-5 mb-4">Trusted By 500+ Satisfied Travelers</h1>
                <p class="mb-4">Golden Memories Safaris is a premier tour operator based in Tanzania, specializing
                    in creating unforgettable wildlife experiences. Our team of expert guides and travel consultants
                    are dedicated to providing authentic safari adventures that showcase Tanzania's breathtaking
                    landscapes and incredible wildlife.</p>
                <div class="row g-4 text-dark mb-5">
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Customized Safari Itineraries
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>24/7 Customer Support
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Expert Local Guides
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Luxury & Budget Options
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn btn-primary py-3 px-5 rounded-pill">Our Story<i
                        class="fas fa-arrow-right ps-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start-->
<div class="container-fluid faqt py-6">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="faqt-item bg-primary rounded p-4 text-center">
                            <i class="fas fa-users fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up">500</h1>
                            <p class="text-dark text-uppercase fw-bold mb-0">Happy Travelers</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="faqt-item bg-primary rounded p-4 text-center">
                            <i class="fas fa-map-marked-alt fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up">15</h1>
                            <p class="text-dark text-uppercase fw-bold mb-0">National Parks</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="faqt-item bg-primary rounded p-4 text-center">
                            <i class="fas fa-check fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up">253</h1>
                            <p class="text-dark text-uppercase fw-bold mb-0">Safaris Completed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <div class="video" style="background: linear-gradient(rgba(254, 218, 154, 0.1), rgba(254, 218, 154, 0.1)), url({{ site_image('home_booking') }}); background-position: center center; background-repeat: no-repeat; background-size: cover; border-radius: 8px;">
                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/2UYle8RwhR0" data-bs-target="#videoModal" aria-label="Play promotional safari video">
                        <span></span>
                    </button>
                </div>
                <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <iframe id="video" width="100%" height="500" src="" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->

<!-- Safari Packages Start -->
<div class="container-fluid safari-packages py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small
                class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Featured
                Safaris</small>
            <h1 class="display-5 mb-5">Explore Our Signature Tanzania Tours</h1>
        </div>
        <div class="row g-4">
            @forelse($featuredSafaris as $index => $safari)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ (($index % 4) * 0.1 + 0.05) }}s">
                <div class="safari-card-min">
                    <div class="card-img-wrap">
                        <img src="{{ $safari->hero_image ? \App\Models\Safari::resolveImageUrl($safari->hero_image) : ($safari->thumbnail_image ? \App\Models\Safari::resolveImageUrl($safari->thumbnail_image) : site_image('hero_fallback_1')) }}"
                            alt="{{ $safari->title }}" loading="lazy">
                        @if($safari->duration)
                        <span class="duration-badge">{{ $safari->duration }}</span>
                        @endif
                        @if($safari->price_from)
                        <div class="price-badge">${{ number_format($safari->price_from, 0) }}<small>start from</small></div>
                        @endif
                    </div>
                    <div class="card-body">
                        <h4>{{ $safari->title }}</h4>
                        <p>{{ $safari->short_description ?: Str::limit(strip_tags($safari->description), 120) }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('safari.show', $safari->slug) }}" class="btn btn-outline-primary">View Details</a>
                        <a href="{{ route('inquiry.create', $safari->slug) }}" class="btn btn-primary">Inquire</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">No safari packages available at the moment.</p>
            </div>
            @endforelse
        </div>
        <div class="text-center mt-5">
            <a href="{{ url('/safaris') }}" class="btn btn-outline-primary py-3 px-5 rounded-pill">View All Safari Packages</a>
        </div>
    </div>
</div>
<!-- Safari Packages End -->

<!-- Service Start -->
<div class="container-fluid service py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small
                class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our
                Services</small>
            <h1 class="display-5 mb-5">Tailored Adventures For Every Explorer</h1>
        </div>
        <div class="row g-4 justify-content-center">

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 wow bounceInUp" data-wow-delay="0.1s">
                <a href="{{ url('/tailoredsafaris') }}" class="service-link-v5">
                    <div class="service-card-v5">
                        <div class="service-icon-v5">
                            <i class="fa fa-route"></i>
                        </div>
                        <div class="service-text-v5 d-flex flex-column h-100">
                            <h4>Tailored Safaris</h4>
                            <p class="mb-0">Craft your dream adventure with personalized itineraries matching your
                                interests.</p>
                            <span class="learn-more mt-auto">Learn More <i
                                    class="fas fa-arrow-right fa-xs ms-1"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 wow bounceInUp" data-wow-delay="0.2s">
                <a href="{{ url('/luxurysafari') }}" class="service-link-v5">
                    <div class="service-card-v5">
                        <div class="service-icon-v5">
                            <i class="fa fa-gem"></i>
                        </div>
                        <div class="service-text-v5 d-flex flex-column h-100">
                            <h4>Luxury Safaris</h4>
                            <p class="mb-0">Experience Tanzania in ultimate comfort with exclusive lodges and
                                premium service.</p>
                            <span class="learn-more mt-auto">Learn More <i
                                    class="fas fa-arrow-right fa-xs ms-1"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 wow bounceInUp" data-wow-delay="0.3s">
                <a href="{{ url('/mountaintrekking') }}" class="service-link-v5">
                    <div class="service-card-v5">
                        <div class="service-icon-v5">
                            <i class="fa fa-mountain"></i>
                        </div>
                        <div class="service-text-v5 d-flex flex-column h-100">
                            <h4>Mountain Trekking</h4>
                            <p class="mb-0">Conquer Kilimanjaro or Meru with our experienced guides and safety
                                focus.</p>
                            <span class="learn-more mt-auto">Learn More <i
                                    class="fas fa-arrow-right fa-xs ms-1"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 wow bounceInUp" data-wow-delay="0.4s">
                <a href="{{ url('/groupsafaris') }}" class="service-link-v5">
                    <div class="service-card-v5">
                        <div class="service-icon-v5">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="service-text-v5 d-flex flex-column h-100">
                            <h4>Group Safaris</h4>
                            <p class="mb-0">Join scheduled departures for an affordable and social safari
                                experience.</p>
                            <span class="learn-more mt-auto">Learn More <i
                                    class="fas fa-arrow-right fa-xs ms-1"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 wow bounceInUp" data-wow-delay="0.5s">
                <a href="{{ url('/zanzibarbeachholiday') }}" class="service-link-v5">
                    <div class="service-card-v5">
                        <div class="service-icon-v5">
                            <i class="fa fa-umbrella-beach"></i>
                        </div>
                        <div class="service-text-v5 d-flex flex-column h-100">
                            <h4>Zanzibar Holidays</h4>
                            <p class="mb-0">Relax on pristine beaches, explore Stone Town, or dive into turquoise
                                waters.</p>
                            <span class="learn-more mt-auto">Learn More <i
                                    class="fas fa-arrow-right fa-xs ms-1"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 wow bounceInUp" data-wow-delay="0.6s">
                <a href="{{ url('/budgetsafari') }}" class="service-link-v5">
                    <div class="service-card-v5">
                        <div class="service-icon-v5">
                            <i class="fa fa-campground"></i>
                        </div>
                        <div class="service-text-v5 d-flex flex-column h-100">
                            <h4>Budget Safaris</h4>
                            <p class="mb-0">Explore Tanzania's wonders affordably with quality camping and basic
                                lodges.</p>
                            <span class="learn-more mt-auto">Learn More <i
                                    class="fas fa-arrow-right fa-xs ms-1"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<div class="container-fluid destinations py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small
                class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Destinations</small>
            <h1 class="display-5 mb-5">Explore Tanzania's Wonders</h1>
        </div>
        <div class="row g-4">
            @forelse($destinations as $index => $destination)
            <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="{{ (($index % 6) * 0.1 + 0.1) }}s">
                <a href="{{ route('destination.show', $destination->slug) }}" class="destination-card-v2">
                    <div class="card-img-wrapper">
                        <img src="{{ $destination->thumbnail_image ? \App\Models\Destination::resolveImageUrl($destination->thumbnail_image) : ($destination->hero_image ? \App\Models\Destination::resolveImageUrl($destination->hero_image) : site_image('hero_fallback_3')) }}" class="card-img"
                            alt="{{ $destination->name }}"
                            width="600" height="400" loading="lazy">
                    </div>
                    <div class="card-title-overlay">
                        <h4 class="card-title">{{ $destination->name }}</h4>
                        @if($destination->subtitle)
                        <span class="card-subtitle">{{ $destination->subtitle }}</span>
                        @endif
                    </div>
                    <div class="card-hover-overlay">
                        <p class="hover-text">{{ $destination->short_description ? Str::limit(strip_tags($destination->short_description), 100) : ($destination->description ? Str::limit(strip_tags($destination->description), 100) : 'Explore this destination') }}</p>
                        <span class="btn btn-explore">Explore Details</span>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">No destinations available at the moment.</p>
            </div>
            @endforelse
        </div>
        <div class="text-center mt-5">
            <a href="{{ url('/destinations') }}" class="btn btn-outline-primary py-3 px-5 rounded-pill">View All Destinations</a>
        </div>
    </div>
</div>

<!-- Book Us Start -->
<div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-0">
            <div class="col-1 booking-side-image">
                <img src="{{ site_image('home_booking') }}" class="img-fluid h-100 w-100 rounded-start"
                    style="object-fit: cover; opacity: 0.7;" alt="Tanzania safari booking" width="150" height="600" loading="lazy">
            </div>
            <div class="col-md-10 col-12">
                <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                    <div class="text-center">
                        <small
                            class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Plan
                            Your Safari</small>
                        <h1 class="display-5 mb-5">Customize Your Tanzania Adventure</h1>
                    </div>
                    <form action="{{ route('inquiry.store') }}" method="POST" id="homeQuoteForm">
                        @csrf
                        <input type="hidden" name="_timestamp" value="{{ time() }}">
                        <div style="position: absolute; left: -9999px; opacity: 0;" aria-hidden="true">
                            <input type="text" name="website" tabindex="-1" autocomplete="off" value="">
                        </div>
                        <input type="hidden" name="subject" value="Homepage Quick Quote">
                        <input type="hidden" name="message" id="homeQuoteMessage" value="Quick quote request from homepage">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select border-primary p-2" name="safari_type" id="safariType">
                                    <option value="" selected disabled>Select Safari Type</option>
                                    <option value="Wildlife Safari">Wildlife Safari</option>
                                    <option value="Beach Holiday">Beach Holiday</option>
                                    <option value="Kilimanjaro Trek">Kilimanjaro Trek</option>
                                    <option value="Cultural Tour">Cultural Tour</option>
                                    <option value="Honeymoon Package">Honeymoon Package</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="name" class="form-control border-primary p-2" placeholder="Your Name *" required>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="email" name="email" class="form-control border-primary p-2" placeholder="Your Email *" required>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Get Safari Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-1 booking-side-image">
                <img src="{{ site_image('home_booking') }}" class="img-fluid h-100 w-100 rounded-end"
                    style="object-fit: cover; opacity: 0.7;" alt="Tanzania safari booking" width="150" height="600" loading="lazy">
            </div>
        </div>
    </div>
</div>
<!-- Book Us End -->


<!-- Testimonial Start -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small
                class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Testimonials</small>
            <h1 class="display-5 mb-5">What Our Travelers Say</h1>
        </div>
        <script src="https://elfsightcdn.com/platform.js" async></script>
        <div class="elfsight-app-db9a06ca-93ea-42fd-a8ae-92fa266ec0fa" data-elfsight-app-lazy></div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<div class="container-fluid blog py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small
                class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Safari
                Blog</small>
            <h1 class="display-5 mb-5">Latest Safari News & Tips</h1>
        </div>
        <div class="row gx-4 justify-content-center">
            @forelse($latestPosts as $index => $post)
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="{{ (($index % 3) * 0.2 + 0.1) }}s">
                <div class="blog-item">
                    <div class="overflow-hidden rounded">
                        <img src="{{ $post->hero_image_url ?? site_image('blog_hero_fallback') }}" class="img-fluid w-100" alt="{{ $post->title }}" width="400" height="250" loading="lazy">
                    </div>
                    <div class="blog-content mx-4 d-flex rounded bg-light">
                        <div class="text-dark bg-primary rounded-start">
                            <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                <p class="fw-bold mb-0">{{ $post->published_at ? $post->published_at->format('d') : '' }}</p>
                                <p class="fw-bold mb-0">{{ $post->published_at ? $post->published_at->format('M') : '' }}</p>
                            </div>
                        </div>
                        <a href="{{ route('blog.show', $post->slug) }}" class="h5 lh-base my-auto h-100 p-3">{{ $post->title }}</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">No blog posts available yet. Check back soon!</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection

@section('extra_scripts')
<script>
    // Video Modal Script — plain JS (no dependency on jQuery, runs on interaction)
    const videoModal = document.getElementById('videoModal');
    if (videoModal) {
        videoModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const videoSrc = button.getAttribute('data-src');
            if (videoSrc) {
                const iframe = videoModal.querySelector('iframe');
                iframe.src = videoSrc + "?autoplay=1";
            }
        });

        videoModal.addEventListener('hidden.bs.modal', function () {
            const iframe = videoModal.querySelector('iframe');
            iframe.src = "";
        });
    }
</script>
@endsection