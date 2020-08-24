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
<<<<<<< HEAD
  .sass('resources/sass/app.scss', 'public/css')
  .version()
  .copyDirectory('resources/editor/js', 'public/js')
  .copyDirectory('resources/editor/css', 'public/css');
=======
    .sass('resources/sass/app.scss', 'public/css').version();
>>>>>>> c82c335ce322802437713ec9d3d2f1e421fc51f3
