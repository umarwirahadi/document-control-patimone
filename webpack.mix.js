const mix = require('laravel-mix');
// const webpack = require('webpack');

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

//  mix.webpackConfig({
//     plugins: [
//       new webpack.ProvidePlugin({
//           '$': 'jquery',
//           'jQuery': 'jquery',
//           'window.jQuery': 'jquery',
//       }),
//     ]
//   });


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

// mix.styles([
//   'resources/css/datatable/dataTables.bootstrap4.min.css',
// ],'public/css/datatables.bootstrap4.min.css');
// mix.scripts([
//     'resources/js/datatables/jquery.dataTables.min.js',
//     'resources/js/datatables/dataTables.bootstrap4.min.js',
// ],'public/js/datatables.js');

mix.version();


    