<!-- JavaScript Libraries (all deferred to eliminate render-blocking) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script defer src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script defer src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script defer src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script defer src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
<script defer src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript (minified for production) -->
<script defer src="{{ asset('js/main.min.js') }}"></script>
<script>
    // Defer non-critical initializations to AFTER LCP to avoid long main-thread tasks
    // that delay Largest Contentful Paint.
    self.addEventListener('load', function() {
        requestAnimationFrame(function() {
            // Initialize lightbox (not needed for LCP)
            if (typeof lightbox !== 'undefined') {
                lightbox.option({
                    'resizeDuration': 200,
                    'wrapAround': true
                });
            }
            // Initialize WOW.js — desktop only, delayed post-LCP to avoid
            // 35 simultaneous element mutations on the main thread.
            if (typeof WOW !== 'undefined' && window.innerWidth >= 768) {
                new WOW({
                    offset: 80,
                    mobile: false
                }).init();
            }
        });
    });
</script>
