const mix = require('laravel-mix');
const glob = require('glob');

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

// forms
mix.js('resources/js/forms/lazyload.js', 'public/js/forms')
    .js('resources/js/forms/app.js', 'public/js/forms')
    .sass('resources/sass/forms/forms.scss', 'public/css')

// httpproxy
mix.js('resources/js/httpproxy/autotrack.js', 'public/js/httpproxy')
    .sass('resources/sass/httpproxy/httpproxy.scss', 'public/css')

// general
mix.copyDirectory('resources/images', 'public/images')
    .sourceMaps()
    .browserSync('localhost:8000');

if (mix.inProduction()) {
    mix.version(glob.sync('**/*', {cwd: 'resources/images'}).map(f => 'public/images/' + f));
}
