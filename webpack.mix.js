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



    mix.js([
        'resources/js/jquery-3.4.1.min.js',
        'resources/js/app.js',
        'resources/js/fontawesome.min.js',
        'resources/js/jquery.counterup.min.js',
        'resources/js/jquery.easing.min.js',
        'resources/js/jquery.waypoints.min.js',
        'resources/js/slick.min.js',
        'resources/js/main.js'
        ], 'public/js/all.js')
        .sass('resources/sass/app.scss', 'public/css')
        .styles([
            'resources/css/fontawesome.min.css',
            'resources/css/slick.css',
            'resources/css/style.css',
            'resources/css/responsive.css'
        ], 'public/css/all.css');
