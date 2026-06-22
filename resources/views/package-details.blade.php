@extends('layouts.app')

@section('title', 'Great Migration Safari Tanzania | Serengeti Wildebeest Migration Tours')
@section('keywords', 'great migration tanzania, serengeti wildebeest migration, river crossing safari, migration safari package, golden memories safaris')
@section('description', 'Witness the Great Migration in Tanzania\'s Serengeti. Book our expert-guided safari to see wildebeest river crossings, predator action, and the circle of life. Golden Memories Safaris.')
@section('canonical', 'https://www.gmsafaris.co.tz/package-details')
@section('og_title', 'Great Migration Safari - Golden Memories Safaris')
@section('og_description', 'Experience the Great Migration in Tanzania with Golden Memories Safaris - 5 day premium wildlife adventure')
@section('og_url', 'https://www.gmsafaris.co.tz/package-details')
@section('og_image', site_image('package_hero'))
@section('twitter_title', 'Great Migration Safari - Golden Memories Safaris')
@section('twitter_description', 'Experience the Great Migration in Tanzania with Golden Memories Safaris - 5 day premium wildlife adventure')
@section('twitter_image', site_image('package_hero'))

@section('extra_styles')
<style>

        /* Package Hero Section */
        .package-hero {
            min-height: 60vh;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .package-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.7) 100%);
        }
        
        .package-hero-content {
            position: relative;
            z-index: 2;
            color: white;
        }
        
        .package-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }
        
        .package-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 0 1px 3px rgba(0,0,0,0.5);
        }
        
        .package-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .package-meta-item {
            display: flex;
            align-items: center;
        }
        
        .package-meta-item i {
            margin-right: 0.5rem;
            color: #d69c40;
        }
        
        /* Package Details Section */
        .package-details-section {
            padding: 5rem 0;
        }
        
        .package-highlights {
            background-color: #f8f9fa;
            border-radius: 0.5rem;
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .highlight-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
        }
        
        .highlight-icon {
            color: #d69c40;
            margin-right: 1rem;
            font-size: 1.2rem;
            margin-top: 0.2rem;
        }
        
        .package-itinerary {
            margin-top: 3rem;
        }
        
        .itinerary-day {
            margin-bottom: 2rem;
            border-left: 3px solid #d69c40;
            padding-left: 1.5rem;
            position: relative;
        }
        
        .itinerary-day:last-child {
            margin-bottom: 0;
        }
        
        .day-number {
            position: absolute;
            left: -1.2rem;
            top: 0;
            background-color: #d69c40;
            color: white;
            width: 2.4rem;
            height: 2.4rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        .day-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            padding-top: 0.3rem;
        }
        
        .day-location {
            color: #d69c40;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        /* Pricing & Booking Section */
        .pricing-section {
            background-color: #f8f9fa;
            padding: 5rem 0;
        }
        
        .price-card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .price-amount {
            font-size: 2.5rem;
            font-weight: 700;
            color: #d69c40;
            margin-bottom: 1rem;
        }
        
        .price-per {
            color: #6c757d;
            font-size: 1rem;
        }
        
        .price-includes {
            margin-top: 2rem;
        }
        
        .price-includes h5 {
            margin-bottom: 1rem;
        }
        
        .price-feature {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        
        .price-feature i {
            color: #28a745;
            margin-right: 0.5rem;
        }
        
        .price-excludes {
            margin-top: 1.5rem;
        }
        
        .price-excludes h5 {
            margin-bottom: 1rem;
        }
        
        .price-feature.excluded i {
            color: #dc3545;
        }
        
        /* Gallery Section */
        .gallery-section {
            padding: 5rem 0;
        }
        
        .gallery-item {
            margin-bottom: 1.5rem;
            border-radius: 0.5rem;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
        }
        
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .package-title {
                font-size: 2.5rem;
            }
            
            .package-subtitle {
                font-size: 1.25rem;
            }
        }
        
        @media (max-width: 768px) {
            .package-hero {
                min-height: 50vh;
            }
            
            .package-title {
                font-size: 2rem;
            }
            
            .package-subtitle {
                font-size: 1.1rem;
            }
        }
        
        @media (max-width: 576px) {
            .package-hero {
                min-height: 40vh;
            }
            
            .package-title {
                font-size: 1.8rem;
            }
        }
    </style>
@endsection

@section('structured_data')
<script type="application/ld+json">

    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.gmsafaris.co.tz/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Great Migration Safari",
          "item": "https://www.gmsafaris.co.tz/package-details"
        }
      ]
    }
    </script>
@endsection

@section('body_content')

    <!-- Package Hero Section -->
    <div class="package-hero" style="background-image: url('{{ site_image('package_hero') }}');">
        <div class="package-hero-overlay"></div>
        <div class="container package-hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <small class="d-inline-block fw-bold text-white text-uppercase border border-white rounded-pill px-4 py-1 mb-3">Premium Safari</small>
                    <h1 class="package-title">Great Migration Safari</h1>
                    <p class="package-subtitle">Witness the world's greatest wildlife spectacle in Tanzania's Serengeti</p>
                    
                    <div class="package-meta">
                        <div class="package-meta-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>5 Days / 4 Nights</span>
                        </div>
                        <div class="package-meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Serengeti National Park</span>
                        </div>
                        <div class="package-meta-item">
                            <i class="fas fa-users"></i>
                            <span>2-6 People</span>
                        </div>
                        <div class="package-meta-item">
                            <i class="fas fa-star"></i>
                            <span>Luxury Tented Camps</span>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#booking" class="btn btn-primary py-3 px-5 rounded-pill">Book This Safari</a>
                        <a href="#itinerary" class="btn btn-outline-light py-3 px-5 rounded-pill">View Itinerary</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Package Details Section -->
    <section class="package-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-4">Safari Overview</h2>
                    <p>Our Great Migration Safari is a once-in-a-lifetime opportunity to witness one of nature's most spectacular events - the annual migration of over 1.5 million wildebeest, zebras, and gazelles across the vast plains of the Serengeti.</p>
                    
                    <p>This 5-day luxury safari focuses on prime locations for viewing the migration, including the Seronera Valley and Grumeti River, where dramatic river crossings often occur between May and July. Our expert guides will position you for the best wildlife viewing opportunities while ensuring your comfort at exclusive tented camps.</p>
                    
                    <div class="package-highlights mt-5">
                        <h3 class="mb-4">Safari Highlights</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="highlight-item">
                                    <i class="fas fa-check highlight-icon"></i>
                                    <div>
                                        <h5 class="mb-1">Wildebeest River Crossings</h5>
                                        <p class="mb-0">Witness the dramatic Grumeti River crossings (seasonal)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="highlight-item">
                                    <i class="fas fa-check highlight-icon"></i>
                                    <div>
                                        <h5 class="mb-1">Big Five Encounters</h5>
                                        <p class="mb-0">Lions, leopards, elephants, buffalo, and rhino</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="highlight-item">
                                    <i class="fas fa-check highlight-icon"></i>
                                    <div>
                                        <h5 class="mb-1">Luxury Tented Camps</h5>
                                        <p class="mb-0">Exclusive accommodations in prime locations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="highlight-item">
                                    <i class="fas fa-check highlight-icon"></i>
                                    <div>
                                        <h5 class="mb-1">Expert Guides</h5>
                                        <p class="mb-0">Knowledgeable guides with 10+ years experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="highlight-item">
                                    <i class="fas fa-check highlight-icon"></i>
                                    <div>
                                        <h5 class="mb-1">Hot Air Balloon Option</h5>
                                        <p class="mb-0">Sunrise balloon safari over the Serengeti (additional cost)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="highlight-item">
                                    <i class="fas fa-check highlight-icon"></i>
                                    <div>
                                        <h5 class="mb-1">Photography Focus</h5>
                                        <p class="mb-0">Specialized vehicles for optimal photography</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="package-itinerary mt-5" id="itinerary">
                        <h2 class="mb-4">Detailed Itinerary</h2>
                        
                        <div class="itinerary-day">
                            <div class="day-number">1</div>
                            <h3 class="day-title">Arrival in Arusha - Transfer to Serengeti</h3>
                            <p class="day-location">Arusha to Central Serengeti</p>
                            <p>Your safari begins with a morning flight from Arusha to the Seronera Airstrip in the heart of the Serengeti. Upon arrival, meet your guide and embark on your first game drive en route to your luxury tented camp. After lunch and some relaxation, head out for an afternoon game drive in the Seronera Valley, known for its high density of predators and excellent wildlife viewing.</p>
                            <p><strong>Meals:</strong> Lunch, Dinner</p>
                            <p><strong>Accommodation:</strong> Serengeti Luxury Tented Camp</p>
                        </div>
                        
                        <div class="itinerary-day">
                            <div class="day-number">2</div>
                            <h3 class="day-title">Full Day Exploring Central Serengeti</h3>
                            <p class="day-location">Central Serengeti</p>
                            <p>Spend a full day exploring the Central Serengeti, home to the famous Seronera River Valley. This area is rich in wildlife throughout the year and is particularly spectacular during the migration season. Look for lions, leopards, cheetahs, and the great herds of wildebeest and zebra. Enjoy a picnic lunch in the bush before continuing your exploration in the afternoon.</p>
                            <p><strong>Meals:</strong> Breakfast, Lunch, Dinner</p>
                            <p><strong>Accommodation:</strong> Serengeti Luxury Tented Camp</p>
                        </div>
                        
                        <div class="itinerary-day">
                            <div class="day-number">3</div>
                            <h3 class="day-title">Western Corridor - Grumeti River</h3>
                            <p class="day-location">Central to Western Serengeti</p>
                            <p>Today you'll travel to the Western Corridor of the Serengeti, following the path of the migration (seasonal). The highlight is the Grumeti River, where dramatic crossings often occur between May and July. The river is home to large crocodiles that lie in wait for the migrating herds. Enjoy full day game drives with picnic lunch in this spectacular area.</p>
                            <p><strong>Meals:</strong> Breakfast, Lunch, Dinner</p>
                            <p><strong>Accommodation:</strong> Western Serengeti Tented Camp</p>
                        </div>
                        
                        <div class="itinerary-day">
                            <div class="day-number">4</div>
                            <h3 class="day-title">Western Serengeti Exploration</h3>
                            <p class="day-location">Western Serengeti</p>
                            <p>Another full day to explore the Western Serengeti and witness the migration (seasonal). Your guide will take you to the best locations for wildlife viewing based on current animal movements. Optional hot air balloon safari available this morning (additional cost). In the afternoon, visit a local Maasai village to learn about their traditional way of life.</p>
                            <p><strong>Meals:</strong> Breakfast, Lunch, Dinner</p>
                            <p><strong>Accommodation:</strong> Western Serengeti Tented Camp</p>
                        </div>
                        
                        <div class="itinerary-day">
                            <div class="day-number">5</div>
                            <h3 class="day-title">Return to Arusha</h3>
                            <p class="day-location">Serengeti to Arusha</p>
                            <p>After breakfast, enjoy a final morning game drive as you make your way to the airstrip for your flight back to Arusha. Upon arrival, you'll be transferred to your hotel or the airport for your onward journey, filled with unforgettable memories of Tanzania's incredible wildlife spectacle.</p>
                            <p><strong>Meals:</strong> Breakfast</p>
                        </div>
                    </div>
                    
                    <div class="mt-5">
                        <h3 class="mb-4">Important Notes</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i> Migration viewing is seasonal - best months are May to July for river crossings</li>
                            <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i> Minimum age requirement: 12 years</li>
                            <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i> Malaria prophylaxis recommended</li>
                            <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i> Travel insurance mandatory</li>
                            <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i> Single supplement available at additional cost</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 20px;">
                        <div class="price-card">
                            <h3 class="mb-4">Package Pricing</h3>
                            <div class="price-amount">$2,800 <span class="price-per">start from</span></div>
                            <p class="text-muted">Based on 2 people sharing</p>
                            
                            <div class="d-grid gap-2">
                                <a href="#booking" class="btn btn-primary btn-lg rounded-pill">Book Now</a>
                                <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg rounded-pill">Enquire Now</a>
                            </div>
                            
                            <div class="price-includes">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> What's Included</h5>
                                <div class="price-feature">
                                    <i class="fas fa-check"></i>
                                    <span>All park fees and conservation charges</span>
                                </div>
                                <div class="price-feature">
                                    <i class="fas fa-check"></i>
                                    <span>Luxury tented camp accommodation</span>
                                </div>
                                <div class="price-feature">
                                    <i class="fas fa-check"></i>
                                    <span>All meals as specified in itinerary</span>
                                </div>
                                <div class="price-feature">
                                    <i class="fas fa-check"></i>
                                    <span>Professional English-speaking safari guide</span>
                                </div>
                                <div class="price-feature">
                                    <i class="fas fa-check"></i>
                                    <span>Private 4x4 safari vehicle with pop-up roof</span>
                                </div>
                                <div class="price-feature">
                                    <i class="fas fa-check"></i>
                                    <span>Domestic flights (Arusha-Serengeti-Arusha)</span>
                                </div>
                                <div class="price-feature">
                                    <i class="fas fa-check"></i>
                                    <span>Bottled drinking water throughout</span>
                                </div>
                            </div>
                            
                            <div class="price-excludes">
                                <h5><i class="fas fa-times-circle text-danger me-2"></i> What's Excluded</h5>
                                <div class="price-feature excluded">
                                    <i class="fas fa-times"></i>
                                    <span>International flights</span>
                                </div>
                                <div class="price-feature excluded">
                                    <i class="fas fa-times"></i>
                                    <span>Visa fees</span>
                                </div>
                                <div class="price-feature excluded">
                                    <i class="fas fa-times"></i>
                                    <span>Travel insurance</span>
                                </div>
                                <div class="price-feature excluded">
                                    <i class="fas fa-times"></i>
                                    <span>Optional activities (balloon safari $550)</span>
                                </div>
                                <div class="price-feature excluded">
                                    <i class="fas fa-times"></i>
                                    <span>Gratuities for guides and camp staff</span>
                                </div>
                                <div class="price-feature excluded">
                                    <i class="fas fa-times"></i>
                                    <span>Alcoholic beverages</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mt-4">
                            <div class="card-body">
                                <h5 class="card-title">Need Help?</h5>
                                <p class="card-text">Our safari specialists are ready to answer your questions and help you plan your perfect Tanzania adventure.</p>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-phone-alt text-primary me-3"></i>
                                    <div>
                                        <p class="mb-0">Call Us</p>
                                        <a href="tel:+255786383273" class="text-dark">+255 786 383 273</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-envelope text-primary me-3"></i>
                                    <div>
                                        <p class="mb-0">Email Us</p>
                                        <a href="mailto:info@gmsafaris.co.tz" class="text-dark">info@gmsafaris.co.tz</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section bg-light">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <h2 class="mb-5">Great Migration Safari Gallery</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="{{ site_image('package_gallery_1') }}" data-lightbox="gallery" class="gallery-item">
                        <img src="{{ site_image('package_gallery_1') }}" alt="Wildebeest migration" class="img-fluid" loading="lazy">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ site_image('package_gallery_2') }}" data-lightbox="gallery" class="gallery-item">
                        <img src="{{ site_image('package_gallery_2') }}" alt="River crossing" class="img-fluid" loading="lazy">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ site_image('package_gallery_3') }}" data-lightbox="gallery" class="gallery-item">
                        <img src="{{ site_image('package_gallery_3') }}" alt="Luxury tented camp" class="img-fluid" loading="lazy">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ site_image('package_gallery_4') }}" data-lightbox="gallery" class="gallery-item">
                        <img src="{{ site_image('package_gallery_4') }}" alt="Serengeti landscape" class="img-fluid" loading="lazy">
                    </a>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('gallery') }}" class="btn btn-outline-primary py-3 px-5 rounded-pill">View Full Gallery</a>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="pricing-section" id="booking">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                        <h2 class="mb-4">Book Your Great Migration Safari</h2>
                        <p class="mb-5">Ready to experience the wildlife spectacle of a lifetime? Fill out the form below and our safari specialists will contact you within 24 hours to confirm availability and finalize your booking.</p>
                    </div>
                    
                    <div class="card shadow">
                        <div class="card-body p-4 p-md-5">
                            <form action="{{ route('inquiry.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="_timestamp" value="{{ time() }}">
                                <div style="position: absolute; left: -9999px; opacity: 0;" aria-hidden="true">
                                    <input type="text" name="website" tabindex="-1" autocomplete="off" value="">
                                </div>
                                <input type="hidden" name="subject" value="Great Migration Safari Inquiry">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="country" name="country" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="date" class="form-label">Preferred Travel Dates</label>
                                        <input type="text" class="form-control" id="date" name="travel_date" placeholder="MM/YYYY">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="people" class="form-label">Number of Travelers</label>
                                        <select class="form-select" id="people" name="travelers">
                                            <option value="1">1 Person</option>
                                            <option value="2" selected>2 People</option>
                                            <option value="3">3 People</option>
                                            <option value="4">4 People</option>
                                            <option value="5">5 People</option>
                                            <option value="6">6 People</option>
                                            <option value="7+">7+ People</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="accommodation" class="form-label">Accommodation Preference</label>
                                        <select class="form-select" id="accommodation" name="accommodation">
                                            <option value="luxury" selected>Luxury Tented Camp</option>
                                            <option value="mid-range">Mid-Range Lodge</option>
                                            <option value="no-preference">No Preference</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="balloon" class="form-label">Hot Air Balloon Safari</label>
                                        <select class="form-select" id="balloon" name="balloon_safari">
                                            <option value="no">No, thanks</option>
                                            <option value="yes">Yes, add balloon safari ($550 pp)</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Special Requests</label>
                                        <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg px-5 py-3 rounded-pill">Submit Booking Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <div class="container-fluid py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <h2 class="mb-5">What Our Travelers Say</h2>
            </div>
            <div class="owl-carousel owl-theme testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="{{ site_image('testimonial_erlend') }}" class="img-fluid rounded-circle flex-shrink-0" alt="Safari customer testimonial from Erlend G" loading="lazy">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Erlend G</h4>
                            <p class="m-0">USA</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">We went on a 4 day safari on the Seregeti and Ngorongoro conservation area, January 2025. Fantastic trip and excellent service! The locally owned Golden Memories give top guiding and premium hospitality. The migration viewing was absolutely spectacular - something we'll never forget!</p>
                    </div>
                </div>
                <div class="testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="{{ site_image('testimonial_sunshine') }}" class="img-fluid rounded-circle flex-shrink-0" alt="Safari customer testimonial from Miss Sunshine" loading="lazy">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Miss Sunshine</h4>
                            <p class="m-0">Germany</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">The Great Migration Safari exceeded all our expectations. Our guide Henry was incredibly knowledgeable about animal behavior and positioned us perfectly to witness an amazing river crossing. The luxury tented camps were superb - falling asleep to the sounds of the Serengeti was magical.</p>
                    </div>
                </div>
                <div class="testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="{{ site_image('testimonial_monika') }}" class="img-fluid rounded-circle flex-shrink-0" alt="Safari customer testimonial from Monika U" loading="lazy">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Monika U</h4>
                            <p class="m-0">Italy</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">As a wildlife photographer, I was blown away by the access and opportunities provided by Golden Memories Safaris. Our guide understood exactly what photographers need - patience, good positioning, and knowledge of animal behavior. The migration was the highlight, but we saw all the Big Five and so much more.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
