const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass("node_modules/bootstrap/scss/bootstrap.scss", "public/css").js(
    "node_modules/bootstrap/dist/js/bootstrap.bundle.js",
    "public/js"
);

