(function ($) {
    "use strict";

    // WOW.js initialized in scripts.blade.php (deferred after LCP) — not here

    // Back to top button — use CSS opacity/visibility instead of jQuery fadeIn/fadeOut
    // to avoid non-composited display transitions (CLS culprit)
    var backToTop = $('.back-to-top');
    if (backToTop.length) {
        backToTop.css({ opacity: 0, visibility: 'hidden', transition: 'opacity 0.3s, visibility 0.3s' });
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                backToTop.css({ opacity: 1, visibility: 'visible' });
            } else {
                backToTop.css({ opacity: 0, visibility: 'hidden' });
            }
        });
        backToTop.click(function () {
            $('html, body').animate({ scrollTop: 0 }, 800, 'easeInOutExpo');
            return false;
        });
    }

    // Hero Carousel
    $(document).ready(function () {
        try {
            $(".hero-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 7000,
                autoplayHoverPause: true,
                dots: true,
                nav: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                smartSpeed: 1000,
                mouseDrag: true,
                touchDrag: true,
                lazyLoad: true,
                onInitialized: function() {
                    // Add accessible names to Owl Carousel buttons
                    $('.hero-carousel .owl-dot').each(function(i) {
                        $(this).attr('aria-label', 'Go to slide ' + (i + 1));
                    });
                    $('.hero-carousel .owl-prev').attr('aria-label', 'Previous slide');
                    $('.hero-carousel .owl-next').attr('aria-label', 'Next slide');
                },
                onChanged: function() {
                    // Update active state for screen readers
                    $('.hero-carousel .owl-dot').each(function(i) {
                        var label = $(this).hasClass('active') 
                            ? 'Slide ' + (i + 1) + ' (current)' 
                            : 'Go to slide ' + (i + 1);
                        $(this).attr('aria-label', label);
                    });
                }
            });
        } catch (error) { }
    });

    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Facts counter
    $(document).ready(function () {
        if ($.fn.counterUp) {
            $('[data-toggle="counter-up"]').counterUp({
                delay: 10,
                time: 2000
            });
        }
    });


    // Testimonial carousel
    $(".testimonial-carousel-1").owlCarousel({
        loop: true,
        dots: false,
        margin: 25,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 0,
        autoplaySpeed: 10000,
        autoplayHoverPause: false,
        responsive: {
            0: { items: 1 },
            575: { items: 1 },
            767: { items: 2 },
            991: { items: 3 }
        }
    });

    $(".testimonial-carousel-2").owlCarousel({
        loop: true,
        dots: false,
        rtl: true,
        margin: 25,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 0,
        autoplaySpeed: 10000,
        autoplayHoverPause: false,
        responsive: {
            0: { items: 1 },
            575: { items: 1 },
            767: { items: 2 },
            991: { items: 3 }
        }
    });

})(jQuery);

