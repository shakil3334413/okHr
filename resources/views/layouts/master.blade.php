<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{asset('backend/favicon.png')}}" rel="shortcut icon">
    <link href="{{asset('backend/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    {{-- <link href="{{asset('backend/bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('backend/bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('backend/bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('backend/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('backend/bower_components/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/batch-icons/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/dashicons/dashicons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/dripicons/webfont.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/eightyshades/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/entypo/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/feather/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/foundation-icon-font/foundation-icons.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('backend/css/main.css?version=4.4.0')}}" rel="stylesheet"> --}}
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}} 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('backend/icon_fonts_assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
   
    @stack('css')
  </head>
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
      
      <div class="layout-w">
        <!--------------------
        START - Mobile Menu
        -------------------->
        @include('layouts.partials.mobile-sidebar');
        <!--------------------
        END - Mobile Menu
        --------------------><!--------------------
        START - Main Menu
        -------------------->
        @include('layouts.partials.sidebar')
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
          <!--------------------
          START - Top Bar
          -------------------->
          @include('layouts.partials.topbar')
          <!--------------------
          END - Top Bar
          --------------------><!--------------------
          START - Breadcrumbs
          -------------------->
          
          <!--------------------
          END - Breadcrumbs
          -------------------->
          {{-- <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div> --}}
          <!-- main content start -->
             @yield('content')
          <!-- main content end -->
        </div>
      </div>
      {{-- <div class="display-type"></div> --}}
    </div>
    @stack('js')
    {{-- <script src="{{asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script> --}}
    {{-- <script src="{{asset('backend/bower_components/popper.js/dist/umd/popper.min.js')}}"></script> --}}
    {{-- <script src="{{asset('backend/bower_components/moment/moment.js')}}"></script> --}}
    {{-- <script src="{{asset('backend/bower_components/chart.js/dist/Chart.min.js')}}"></script> --}}
    {{-- <script src="{{asset('backend/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('backend/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/dropzone/dist/dropzone.js')}}"></script>
    <script src="{{asset('backend/bower_components/editable-table/mindmup-editabletable.js')}}"></script> --}}
    {{-- <script src="{{asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script> --}}
    {{-- <script src="{{asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script> --}}
    {{-- <script src="{{asset('backend/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>    
    <script src="{{asset('backend/bower_components/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/slick-carousel/slick/slick.min.js')}}"></script> --}}
    {{-- <script src="{{asset('backend/bower_components/bootstrap/js/dist/util.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/alert.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/button.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/carousel.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/collapse.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/dropdown.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/modal.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/tab.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/tooltip.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/popover.js')}}"></script> --}}
    {{-- <script src="{{asset('backend/js/demo_customizer.js?version=4.4.0')}}"></script>
    <script src="{{asset('backend/js/main.js?version=4.4.0')}}"></script>
    <script src="{{asset('backend/js/dataTables.bootstrap4.min.js')}}"></script> --}}
    <script src="{{ asset('js/all.js') }}"></script>

  </body>
</html>
