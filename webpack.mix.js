const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Admin
 |--------------------------------------------------------------------------
 |
 */

mix.js('resources/js/admin/app.js', 'public/js/admin')
    .sass('resources/scss/admin/app.scss', 'public/css/admin').options({
        processCssUrls: false
    }).version();

/*
 |--------------------------------------------------------------------------
 | Mix Asset Rayogas
 |--------------------------------------------------------------------------
 |
 */

mix.js('resources/js/rayogas/app.js', 'public/js/rayogas')
    .sass('resources/scss/rayogas/app.scss', 'public/css/rayogas').options({
        processCssUrls: false
    }).version();
