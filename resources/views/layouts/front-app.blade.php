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

            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">  
                                    
                    <div class="container-fluid clearfix"> 
                
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/front_assets/images/logo-light-3.png') }}" alt="" class="default-scroll-show">
                                    <img src="{{ asset('assets/front_assets/images/logo-dark.png') }}" alt="" class="on-scroll-show">
                                </a>
                            </div>
                        </div>  
                        
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button> 

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
 
                            <ul class=" nav navbar-nav">
                                <li class="has-child"><a href="{{ url('/') }}">Home</a>                                                          
                                </li>
                                <li class="has-child"><a href="javascript:;">Jobs</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Jobs Grid</a></li>
                                        <li><a href="#">Jobs Grid with Map</a></li>
                                        <li><a href="#">Jobs List</a></li>
                                        <li class="has-child"><a href="javascript:;">Job Detail</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Detail 1</a>
                                                <li><a href="#">Detail 2 </a>
                                            </ul> 
                                        </li>
                                        <li><a href="#">Apply Jobs</a></li>
                                    </ul>                                                                 
                                </li>
                                <li class="has-child"><a href="javascript:;">Employers</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Employers Grid</a></li>
                                        <li><a href="#">Employers List</a></li>
                                        <li class="has-child"><a href="javascript:;">Employers Detail</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Detail 1</a>
                                                <li><a href="#">Detail 2</a>
                                            </ul> 
                                        </li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Resume</a></li>
                                        <li><a href="#">Manage Jobs</a></li>
                                        <li><a href="#">Post A Jobs</a></li>
                                        <li><a href="#">Transaction</a></li>
                                        <li><a href="#">Browse Candidates</a></li>
                                        <li><a href="#">Change Password</a></li>
                                        <li><a href="#">Register Fresher</a></li>
                                        <li><a href="#">Register Professionals</a></li>
                                    </ul>                                                                 
                                </li>
                                <li class="has-child"><a href="javascript:;">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">About Us</a></li> 
                                        <li><a href="#">Pricing</a></li> 
                                        <li><a href="#">Error-404</a></li>
                                        <li><a href="#">FAQ's</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Under Maintenance</a></li>
                                        <li><a href="#">Coming soon</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">After Login</a></li>
                                        <li><a href="#">Icons</a></li> 
                                    </ul>                                                                
                                </li>
                                <li class="has-child"><a href="javascript:;">Candidates</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Candidates Grid</a></li>
                                        <li><a href="#">Candidates List</a></li>
                                        <li class="has-child"><a href="javascript:;">Candidate Detail</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Detail 1</a>
                                                <li><a href="#">Detail 2</a>
                                            </ul> 
                                        </li>
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">My Pfofile</a></li>
                                        <li><a href="#">Applied Jobs</a></li>
                                        <li><a href="#">My Resume</a></li>
                                        <li><a href="#">Saved Jobs</a></li>
                                        <li><a href="#">CV Manager</a></li>
                                        <li><a href="#">Job Alerts<#/a></li>
                                        <li><a href="#">Change Passeord</a></li>
                                        <li><a href="#">Chat</a></li>
                                    </ul>                                                                
                                </li>
                                <li class="has-child"><a href="javascript:;">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Blog</a></li>                                        
                                        <li><a href="#">Blog Grid</a></li>
                                        <li><a href="#">Blog Grid-2</a></li>                                        
                                        <li><a href="#">Blog List</a></li>
                                        <li><a href="#">Blog Detail</a></li>                                        
                                    </ul>                                
                                </li>
                            </ul>

                        </div>
                        
                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">
                            <div class="extra-cell">
                                <div class="header-search">
                                    <a href="#search" class="header-search-icon"><i class="feather-search"></i></a>
                                </div>                                
                            </div>
                            <div class="extra-cell">
                                <div class="header-nav-btn-section">
                                    <div class="twm-nav-btn-left">
                                        <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup" role="button">
                                            <i class="feather-log-in"></i> Sign Up
                                        </a>
                                    </div>
                                    <div class="twm-nav-btn-right">
                                        <a href="##" class="twm-nav-post-a-job">
                                            <i class="feather-briefcase"></i> Post a job
                                        </a>
                                    </div>
                                </div>
                            </div> 
                                
                        </div>                            
                    
                                                    
                        
                    </div>    
                
                
                </div>

                <!-- SITE Search -->
                <div id="search"> 
                    <span class="close"></span>
                    <form role="search" id="searchform" action="#" method="get" class="radius-xl">
                        <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>
                        <span class="input-group-append">
                            <button type="button" class="search-btn">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </span>
                    </form>
                </div> 
            </div>


        </header>
        <!-- HEADER END -->
    
        

        
            @yield('content')
        
    <!-- FOOTER START -->
    <footer class="footer-dark" style="background-image: url({{ asset('assets/front_assets/images/f-bg.jpg') }} );">
        <div class="container">

            <!-- NEWS LETTER SECTION START -->
            <div class="ftr-nw-content">
                <div class="row">
                    <div class="col-md-5">
                        <div class="ftr-nw-title">
                            Join our email subscription now to get updates 
                            on new jobs and notifications.
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form>
                            <div class="ftr-nw-form">
                                <input name="news-letter" class="form-control" placeholder="Enter Your Email" type="text">
                                <button class="ftr-nw-subcribe-btn">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- NEWS LETTER SECTION END -->
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top">
                <div class="row">

                    <div class="col-lg-3 col-md-12">
                        
                        <div class="widget widget_about">
                            <div class="logo-footer clearfix">
                                <a href="#"><img src="{{ asset('assets/front_assets/images/logo-light.png') }}" alt=""></a>
                            </div>
                            <p>Many desktop publishing packages and web page editors now.</p>
                            <ul class="ftr-list">
                                <li><p><span>Address :</span>Hi-Tech City, Hyderabad,Telangana,India. </p></li>
                                <li><p><span>Email :</span>info@rapidjobs.com</p></li>
                                <li><p><span>Call :</span>555-555-1234</p></li>
                            </ul>
                        </div>                            
                        
                    </div> 

                    <div class="col-lg-9 col-md-12">
                        <div class="row">
                           
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="widget widget_services ftr-list-center">
                                    <h3 class="widget-title">For Candidate</h3>
                                    <ul>
                                        <li><a href="#">User Dashboard</a></li>
                                        <li><a href="#">Alert resume</a></li>
                                        <li><a href="#">Candidates</a></li>
                                        <li><a href="#">Blog List</a></li>
                                        <li><a href="#">Blog single</a></li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="widget widget_services ftr-list-center">
                                    <h3 class="widget-title">For Employers</h3>
                                    <ul>
                                        <li><a href="#">Post Jobs</a></li>
                                        <li><a href="#">Blog Grid</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Jobs Listing</a></li>
                                        <li><a href="#">Jobs details</a></li>
                                    </ul>
                                </div>#
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="widget widget_services ftr-list-center">
                                    <h3 class="widget-title">Helpful Resources</h3>
                                    <ul>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Employer detail</a></li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">404 Page</a></li>
                                        <li><a href="#">Pricing</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">  
                                <div class="widget widget_services ftr-list-center">
                                    <h3 class="widget-title">Quick Links</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Bookmark</a></li>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">Employer</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>  

                    </div> 

                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
            
                <div class="footer-bottom-info">
                
                    <div class="footer-copy-right">
                        <span class="copyrights-text">Copyright © 2022 by Rapid Technologies All Rights Reserved.</span>
                    </div>
                    <ul class="social-icons">
                        <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                        <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                        <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                        <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                    </ul>
                    
                </div>
                
            </div>

        </div>

    </footer>
    <!-- FOOTER END -->

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    <!--Model Popup Section Start-->
        <!--Signup popup -->
        <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>

                        <div class="modal-header">
                            <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                            <p>Sign Up and get access to all the features of Jobzilla</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="twm-tabs-style-2">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <!--Signup Candidate-->  
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                </li>
                                <!--Signup Employer-->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                </li>
                                
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                <!--Signup Candidate Content-->  
                                <div class="tab-pane fade show active" id="sign-candidate">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                            </div>
                                        </div>
        
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="agree1">
                                                    <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                    <p>Already registered?
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">Sign Up</button>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!--Signup Employer Content--> 
                                <div class="tab-pane fade" id="sign-Employer">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                            </div>
                                        </div>
        
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="agree2">
                                                    <label class="form-check-label" for="agree2">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                    <p>Already registered?
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">Sign Up</button>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                </div>
                            </div> 
                        </div>

                        <div class="modal-footer">
                            <span class="modal-f-title">Login or Sign up with</span>
                            <ul class="twm-modal-social">
                                <li><a href="#" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="google-clr"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>

                    </form>
                </div>
            </div>
            
        </div>
        <!--Login popup -->
        <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                    <form>
                        <div class="modal-header">
                            <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                            <p>Login and get access to all the features of Jobzilla</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="twm-tabs-style-2">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                    <!--Login Candidate-->  
                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#login-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                    </li>
                                    <!--Login Employer-->
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                    </li>
                                
                                </ul>
                                
                                <div class="tab-content" id="myTab2Content">
                                    <!--Login Candidate Content-->  
                                    <div class="tab-pane fade show active" id="login-candidate">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="Password3">
                                                        <label class="form-check-label rem-forgot" for="Password3">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Log in</button>
                                                <div class="mt-3 mb-3">Don't have an account ? 
                                                    <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--Login Employer Content--> 
                                    <div class="tab-pane fade" id="login-Employer">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="Password4">
                                                        <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Log in</button>
                                                <div class="mt-3 mb-3">Don't have an account ? 
                                                    <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                
                                </div>
                            </div> 
                        </div>
                        <div class="modal-footer">
                            <span class="modal-f-title">Login or Sign up with</span>
                            <ul class="twm-modal-social">
                                <li><a href="#" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="google-clr"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
