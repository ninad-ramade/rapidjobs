<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- META -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>{{ config('app.name', 'RapidRealEstate') }}</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/aos2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/realestate_assets/css/maps.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('assets/realestate_assets/css/colors/pink.css') }}">
</head>
<body class="homepage-9 hp-6 homepage-1 mh">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="header head-tr">
            <!-- Header -->
            @include('includes/realestate_header')
            <!-- Header / End -->

        </header>

@yield('content')
<!-- START FOOTER -->
<footer class="first-footer rec-pro">
    @include('includes/realestate_footer')
</footer>

 <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
 <!-- END FOOTER -->

 <!--register form -->
    @include('includes/realestate_login_register_forms')
 <!--register form end -->

 <!-- START PRELOADER -->
 <div id="preloader">
     <div id="status">
         <div class="status-mes"></div>
     </div>
 </div>
 <!-- END PRELOADER -->

 <!-- ARCHIVES JS -->
 <script src="{{ asset('assets/realestate_assets/js/jquery-3.5.1.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/rangeSlider.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/tether.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/moment.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/mmenu.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/mmenu.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/aos.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/aos2.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/animate.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/slick.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/fitvids.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/typed.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/jquery.counterup.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/imagesloaded.pkgd.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/smooth-scroll.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/lightcase.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/search.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/owl.carousel.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/ajaxchimp.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/newsletter.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/jquery.form.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/jquery.validate.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/searched.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/forms-2.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/map-style2.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/range.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/js/color-switcher.js') }}"></script>
 <script>
     $(window).on('scroll load', function() {
         $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
     });

 </script>

 <!-- Slider Revolution scripts -->
 <script src="{{ asset('assets/realestate_assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
 <script src="{{ asset('assets/realestate_assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

 <script>
     var typed = new Typed('.typed', {
         strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
         smartBackspace: false,
         loop: true,
         showCursor: true,
         cursorChar: "|",
         typeSpeed: 50,
         backSpeed: 30,
         startDelay: 800
     });

 </script>

 <script>
     $('.slick-lancers').slick({
         infinite: false,
         slidesToShow: 4,
         slidesToScroll: 1,
         dots: true,
         arrows: false,
         adaptiveHeight: true,
         responsive: [{
             breakpoint: 1292,
             settings: {
                 slidesToShow: 2,
                 slidesToScroll: 2,
                 dots: true,
                 arrows: false
             }
         }, {
             breakpoint: 993,
             settings: {
                 slidesToShow: 2,
                 slidesToScroll: 2,
                 dots: true,
                 arrows: false
             }
         }, {
             breakpoint: 769,
             settings: {
                 slidesToShow: 1,
                 slidesToScroll: 1,
                 dots: true,
                 arrows: false
             }
         }]
     });

 </script>

 <script>
     $('.job_clientSlide').owlCarousel({
         items: 2,
         loop: true,
         margin: 30,
         autoplay: false,
         nav: true,
         smartSpeed: 1000,
         slideSpeed: 1000,
         navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
         dots: false,
         responsive: {
             0: {
                 items: 1
             },
             991: {
                 items: 3
             }
         }
     });

 </script>

 <script>
     $('.style2').owlCarousel({
         loop: true,
         margin: 0,
         dots: false,
         autoWidth: false,
         autoplay: true,
         autoplayTimeout: 5000,
         responsive: {
             0: {
                 items: 2,
                 margin: 20
             },
             400: {
                 items: 2,
                 margin: 20
             },
             500: {
                 items: 3,
                 margin: 20
             },
             768: {
                 items: 4,
                 margin: 20
             },
             992: {
                 items: 5,
                 margin: 20
             },
             1000: {
                 items: 7,
                 margin: 20
             }
         }
     });

 </script>

 <script>
     $(".dropdown-filter").on('click', function() {

         $(".explore__form-checkbox-list").toggleClass("filter-block");

     });

 </script>

 <!-- MAIN JS -->
 <script src="{{ asset('assets/realestate_assets/js/script.js') }}"></script>

</div>
<!-- Wrapper / End -->
</body>
</html>
