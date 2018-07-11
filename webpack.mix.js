let mix = require('laravel-mix');

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

mix.combine([
    'resources/assets/js/app.js'
], 'public/js/compiled.min.js');

mix.combine([
    'resources/assets/js/app_admin.js'
], 'public/admin_assets/js/compiled.min.js');

mix.sass('resources/assets/sass/frontend/main.scss', 'public/css/compiled.min.css').options({ processCssUrls: false });
mix.sass('resources/assets/sass/admin/main.scss', 'public/admin_assets/css/compiled.min.css');
