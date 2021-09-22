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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/bootstrap.bundle.min.js', 'public/js')
    .js('resources/js/easing.js', 'public/js')
    .js('resources/js/globe.js', 'public/js')
    .js('resources/js/index.js', 'public/js')
    .js('resources/js/jquery-3.6.0.min.js', 'public/js')
    .js('resources/js/numbers.js', 'public/js')
    .js('resources/js/owl.carousel.min.js', 'public/js')
    .js('resources/js/particles.min.js', 'public/js')
    .js('resources/js/stats.js', 'public/js')
    .js('resources/js/threemodule.js', 'public/js')
    .js('resources/js/timing.js', 'public/js')
    .js('resources/js/userstate.js', 'public/js')

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
