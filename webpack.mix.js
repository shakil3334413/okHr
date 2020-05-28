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
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'public/backend/bower_components/select2/dist/css/select2.min.css',
        'public/backend/bower_components/bootstrap-daterangepicker/daterangepicker.css',
        'public/backend/bower_components/dropzone/dist/dropzone.css',
        'public/backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
        'public/backend/bower_components/fullcalendar/dist/fullcalendar.min.css',
        'public/backend/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css',
        'public/backend/bower_components/slick-carousel/slick/slick.css',
        'public/backend/icon_fonts_assets/batch-icons/style.css',
        'public/backend/icon_fonts_assets/dashicons/dashicons.css',
        'public/backend/icon_fonts_assets/dripicons/webfont.css',
        'public/backend/icon_fonts_assets/eightyshades/style.css',
        'public/backend/icon_fonts_assets/entypo/style.css',
        'public/backend/icon_fonts_assets/feather/style.css',
        'public/backend/icon_fonts_assets/font-awesome/css/font-awesome.min.css',
        'public/backend/icon_fonts_assets/foundation-icon-font/foundation-icons.css',
        'public/backend/css/main.css'
    ], 'public/css/all.css')
    .scripts([
        'public/backend/bower_components/jquery/dist/jquery.min.js',
        'public/backend/bower_components/popper.js/dist/umd/popper.min.js',
        'public/backend/bower_components/moment/moment.js',
        'public/backend/bower_components/chart.js/dist/Chart.min.js',
        'public/backend/bower_components/select2/dist/js/select2.full.min.js',
        'public/backend/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js',
        'public/backend/bower_components/ckeditor/ckeditor.js',
        'public/backend/bower_components/bootstrap-validator/dist/validator.min.js',
        'public/backend/bower_components/bootstrap-daterangepicker/daterangepicker.js',
        'public/backend/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js',
        'public/backend/bower_components/dropzone/dist/dropzone.js',
        'public/backend/bower_components/editable-table/mindmup-editabletable.js',
        'public/backend/bower_components/datatables.net/js/jquery.dataTables.min.js',
        'public/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
        'public/backend/bower_components/fullcalendar/dist/fullcalendar.min.js',
        'public/backend/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js',
        'public/backend/bower_components/tether/dist/js/tether.min.js',
        'public/backend/bower_components/slick-carousel/slick/slick.min.js',
        'public/backend/bower_components/bootstrap/js/dist/util.js',
        'public/backend/bower_components/bootstrap/js/dist/alert.js',
        'public/backend/bower_components/bootstrap/js/dist/button.js',
        'public/backend/bower_components/bootstrap/js/dist/carousel.js',
        'public/backend/bower_components/bootstrap/js/dist/collapse.js',
        'public/backend/bower_components/bootstrap/js/dist/dropdown.js',
        'public/backend/bower_components/bootstrap/js/dist/modal.js',
        'public/backend/bower_components/bootstrap/js/dist/tab.js',
        'public/backend/bower_components/bootstrap/js/dist/tooltip.js',
        'public/backend/bower_components/bootstrap/js/dist/popover.js',
        'public/backend/js/demo_customizer.js',
        'public/backend/js/main.js',
        'public/backend/js/dataTables.bootstrap4.min.js',
    ], 'public/js/all.js');


