// PurgeCSS configuration
// Scans all Blade templates and JS files to find used CSS classes,
// then strips unused rules from bootstrap.min.css
module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './js/**/*.js',
    './resources/views/**/*.php',
  ],
  css: [
    './css/bootstrap.min.css',
    './css/style.min.css',
  ],
  safelist: {
    standard: [
      // Owl Carousel dynamic classes (added by JS at runtime)
      /^owl-/,
      /^animated/,
      /^wow/,
      /^fade/,
      /^bounce/,
      /^slide/,

      // WOW.js animation classes
      'bounceInUp',
      'bounceInDown',
      'fadeInUp',
      'fadeInDown',
      'fadeInLeft',
      'fadeInRight',

      // Bootstrap carousel classes (used by Owl, not Bootstrap carousel)
      'active',
      'show',
      'collapse',
      'collapsing',
      'dropdown',
      'dropdown-menu',
      'dropdown-item',
      'dropdown-toggle',

      // CounterUp dynamic classes
      /^counter-/,

      // Lightbox dynamic classes
      /^lb-/,
      /^lightbox/,

      // GTranslate classes
      /^gtranslate/,
      /^nturl/,

      // Elfsight widget classes
      /^elfsight/,



      // Back to top
      'back-to-top',

      // Modal
      'modal-backdrop',
      'fade',
      'modal-open',

      // Form validation states
      'was-validated',
      'is-invalid',
      'is-valid',
      'invalid-feedback',

      // WP/admin-like classes used in admin panel
      /^card-/,
    ],
    greedy: [
      /^btn-/,
      /^text-/,
      /^bg-/,
      /^border-/,
      /^d-/,
      /^justify-content-/,
      /^align-items-/,
      /^align-content-/,
      /^flex-/,
      /^col-/,
      /^row-/,
      /^g-/,
      /^gap-/,
      /^p[tbsexyclr]?-/,
      /^m[tbsexyclr]?-/,
      /^fs-/,
      /^fw-/,
      /^lh-/,
      /^rounded/,
      /^position-/,
      /^top-/,
      /^start-/,
      /^end-/,
      /^bottom-/,
      /^translate-/,
      /^overflow-/,
      /^shadow-/,
      /^opacity-/,
      /^visible/,
      /^invisible/,
      /^w-/,
      /^h-/,
      /^mw-/,
      /^mh-/,
      /^min-/,
      /^max-/,
      /^sticky/,
      /^fixed-/,
      /^sr-/,
      /^ratio/,
      /^object-/,
      /^user-/,
      /^pointer-/,
      /^pe-/,
      /^me-/,
      /^ms-/,
      /^ps-/,
      /^pe-/,
      /^pb-/,
      /^pt-/,
      /^px-/,
      /^py-/,
      /^mb-/,
      /^mt-/,
      /^mx-/,
      /^my-/,
      /^ms-/,
      /^me-/,
      /^display-/,
      /^float-/,
      /^clearfix/,
    ]
  }
};
