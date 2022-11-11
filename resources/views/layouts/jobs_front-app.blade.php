<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- META -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('assets/front_assets/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/front_assets/images/favicon.png') }}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RapidJobs') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/bootstrap.min.css') }}"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/font-awesome.min.css') }}"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/feather.css') }}"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/owl.carousel.min.css') }}"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/magnific-popup.min.css') }}"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/lc_lightbox.css') }}"><!-- Lc light box popup -->     
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/bootstrap-select.min.css') }}"><!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/dataTables.bootstrap5.min.css') }}"><!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/select.bootstrap5.min.css') }}"><!-- DASHBOARD select bootstrap  STYLE SHEET  -->     
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/dropzone.css') }}"><!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/scrollbar.css') }}"><!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/datepicker.css') }}"><!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/flaticon.css') }}"> <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_assets/css/style.css') }}"><!-- MAIN STYLE SHEET -->

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->
    <div class="page-wraper">
        <!-- HEADER START -->
        <header  class="site-header header-style-light mobile-sider-drawer-menu">
            @include('includes/jobs_header')
        </header>
        <!-- HEADER END -->
    
        

        
            @yield('content')
        
    <!-- FOOTER START -->
    @include('includes/jobs_footer')
    <!-- FOOTER END -->

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    <!--Model Popup Section Start-->
        @include('includes/jobs_login_register_forms')
    <!--Model Popup Section End-->


 </div>

    <!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="{{ asset('assets/front_assets/js/jquery-3.6.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('assets/front_assets/js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
<script  src="{{ asset('assets/front_assets/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{ asset('assets/front_assets/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{ asset('assets/front_assets/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('assets/front_assets/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('assets/front_assets/js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
<script  src="{{ asset('assets/front_assets/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('assets/front_assets/js/imagesloaded.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('assets/front_assets/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script  src="{{ asset('assets/front_assets/js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{ asset('assets/front_assets/js/lc_lightbox.lite.js') }}" ></script><!-- IMAGE POPUP -->
<script  src="{{ asset('assets/front_assets/js/bootstrap-select.min.js') }}"></script><!-- Form js -->
<script  src="{{ asset('assets/front_assets/js/dropzone.js') }}"></script><!-- IMAGE UPLOAD  -->
<script  src="{{ asset('assets/front_assets/js/jquery.scrollbar.js') }}"></script><!-- scroller -->
<script  src="{{ asset('assets/front_assets/js/bootstrap-datepicker.js') }}"></script><!-- scroller -->
<script  src="{{ asset('assets/front_assets/js/jquery.dataTables.min.js') }}"></script><!-- Datatable -->
<script  src="{{ asset('assets/front_assets/js/dataTables.bootstrap5.min.js') }}"></script><!-- Datatable -->
<script  src="{{ asset('assets/front_assets/js/chart.js') }}"></script><!-- Chart -->
<script  src="{{ asset('assets/front_assets/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
</body>
</html>
