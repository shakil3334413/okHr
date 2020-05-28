<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
  
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{asset('backend/favicon.png')}}" rel="shortcut icon">
    <link href="{{asset('backend/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('backend/bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/bower_components/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/batch-icons/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/dashicons/dashicons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/dripicons/webfont.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/eightyshades/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/entypo/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/feather/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/icon_fonts_assets/foundation-icon-font/foundation-icons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/main.css?version=4.4.0')}}" rel="stylesheet">
</head>
<body class="auth-wrapper">
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo-w">
            <a href="index.html"><img alt="" src="{{ asset('backend/img/logo-big.png') }}"></a>
        </div>
        <h4 class="auth-header">
            Login Form
        </h4>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="">Username Or E-mail</label>
                <input id="email" type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  autocomplete="current-password">
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="buttons-w">
                <button class="btn btn-primary">Log me in</button>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">Remember Me</label>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="{{asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/moment/moment.js')}}"></script>
    <script src="{{asset('backend/bower_components/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('backend/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/dropzone/dist/dropzone.js')}}"></script>
    <script src="{{asset('backend/bower_components/editable-table/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>    
    <script src="{{asset('backend/bower_components/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/slick-carousel/slick/slick.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/util.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/alert.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/button.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/carousel.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/collapse.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/dropdown.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/modal.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/tab.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/tooltip.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap/js/dist/popover.js')}}"></script>
    <script src="{{asset('backend/js/demo_customizer.js?version=4.4.0')}}"></script>
    <script src="{{asset('backend/js/main.js?version=4.4.0')}}"></script>
    <script src="{{asset('backend/js/dataTables.bootstrap4.min.js')}}"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-XXXXXXX-9', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>