"use strict";

var mix = require('laravel-mix');
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


mix.browserSync('http://192.168.0.120:8000/');
mix.js('resources/js/app.js', 'public/js').vue().sass('resources/sass/app.scss', 'public/css');