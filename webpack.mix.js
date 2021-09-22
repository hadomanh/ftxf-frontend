const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copy(['resources/js/app.js',
        'resources/js/bootstrap.bundle.min.js',
        'resources/js/easing.js',
        'resources/js/globe.js',
        'resources/js/index.js',
        'resources/js/jquery-3.6.0.min.js',
        'resources/js/numbers.js',
        'resources/js/owl.carousel.min.js',
        'resources/js/particles.min.js',
        'resources/js/stats.js',
        'resources/js/threemodule.js',
        'resources/js/timing.js',
        'resources/js/userstate.js'], 'public/js')

    .scripts([
        'resources/js/custom.js',
    ], 'public/js/admin.js')

    .styles([
        'resources/css/custom.css',
    ], 'public/css/admin.css')

    .styles([
        'resources/css/bootstrap.min.css',
        'resources/css/bootstrap.min.css.map',
        'resources/css/owl.theme.default.css',
        'resources/css/owl.carousel.css',
        'resources/css/style.css',
    ], 'public/css/style.css')

    .sourceMaps();
