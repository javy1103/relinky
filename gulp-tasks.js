const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

elixir(function(mix) {
    mix.scripts([
        "bower_components/jquery/dist/jquery.js",
        // fastclick (touch devices)
        "bower_components/fastclick/lib/fastclick.js",
        // bez easing
        "bower_components/jquery-bez/jquery.bez.min.js",
        // hi-res images
        "bower_components/dense/src/dense.js",
        // one page nav
        "resources/assets/js/landing/custom/jquery.nav.js",
        // selectize
        "bower_components/selectize/dist/js/standalone/selectize.js",

    ], 'resources/assets/js/landing/common.js', './')
})
