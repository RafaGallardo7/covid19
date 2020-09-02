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
   .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
   // 'node_modules/jquery/dist/jquery.js',
   // 'node_modules/bootstrap/dist/js/bootstrap.js',
   // 'node_modules/datatables/media/js/jquery.dataTables.js'
], 'public/js/all.js', './');

mix.styles([
   // 'node_modules/bootstrap/dist/css/bootstrap.css',
   // 'node_modules/datatables/media/css/jquery.dataTables.css'
], 'public/css/all.css', './');