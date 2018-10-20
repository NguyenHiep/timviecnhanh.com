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
/** Global config */
mix.copyDirectory('resources/images', 'public/images');
mix.js('resources/js/app.js', 'public/js')
.js('resources/js/manage.js', 'public/js')
.sass('resources/sass/app.scss', 'public/css')
.sass('resources/sass/manage.scss', 'public/css');
mix.scripts([
  'resources/js/manage/modernizr.min.js'
], 'public/js/modernizr.min.js');
mix.styles([
  'resources/plugins/morris/morris.css',
  'resources/plugins/switchery/switchery.min.css'
], 'public/css/plugins.css');
mix.scripts([
  'resources/js/manage/jquery.core.js',
  'resources/js/manage/jquery.app.js'
], 'public/js/jsCore.js');

mix.scripts([
  'resources/js/manage/jquery-migrate-3.0.0.js',
  'resources/js/manage/tether.min.js',
  'resources/js/manage/detect.js',
  'resources/js/manage/fastclick.js',
  'resources/js/manage/jquery.blockUI.js',
  'resources/js/manage/waves.js',
  'resources/js/manage/jquery.nicescroll.js',
  'resources/js/manage/jquery.scrollTo.min.js',
  'resources/js/manage/jquery.slimscroll.js',
  'resources/js/manage/jquery.scrollTo.min.js',
  'resources/plugins/switchery/switchery.min.js'
], 'public/js/globalScript.js');

/** DashBoard Page */
mix.scripts([
  <!--Morris Chart-->
  'resources/plugins/morris/morris.min.js',
  'resources/plugins/raphael/raphael-min.js',
  <!-- Counter Up  -->
  'resources/plugins/waypoints/lib/jquery.waypoints.js',
  'resources/plugins/counterup/jquery.counterup.min.js'
], 'public/js/pluginsHome.js');

mix.scripts([
  'resources/pages/jquery.dashboard.js'
], 'public/js/jsPageHome.js');

