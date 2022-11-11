@extends('layouts.jobs_front-app')

@section('content')
<!-- CONTENT START -->
<div class="page-content">

    <!--Banner Start-->
    @include('includes/jobs_home_search_banner')
    <!--Banner End-->

    <!-- TOP COMPANIES START -->
    <div class="section-full p-t120 p-b90 site-bg-white twm-companies-wrap">
          
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer">
            <div class="wt-small-separator site-text-primary">
               <div>Top Companies</div>                                
            </div>
            <h2 class="wt-title">Get hired in top companies</h2>
        </div>                  
        <!-- TITLE END-->

        <div class="container">
            <div class="section-content">
                <div class="owl-carousel home-client-carousel3 owl-btn-vertical-center">
                
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="{{ asset('assets/front_assets/images/client-logo2/w1.png') }}" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="{{ asset('assets/front_assets/images/client-logo2/w2.png') }}" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="{{ asset('assets/front_assets/images/client-logo2/w3.png') }}" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="{{ asset('assets/front_assets/images/client-logo2/w4.png') }}" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="{{ asset('assets/front_assets/images/client-logo2/w5.png') }}" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="{{ asset('assets/front_assets/images/client-logo2/w6.png') }}" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="{{ asset('assets/front_assets/images/client-logo2/w1.png') }}" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="{{ asset('assets/front_assets/images/client-logo2/w2.png') }}" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="{{ asset('assets/front_assets/images/client-logo2/w3.png') }}" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="{{ asset('assets/front_assets/images/client-logo2/w5.png') }}" alt=""></a></div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="twm-company-approch2-outer">
                <div class="twm-company-approch2">
                    <div class="row">

                        <!--block 1-->
                        <div class="col-lg-4 col-md-4">
                            <div class="counter-outer-two">
                                <div class="icon-content">
                                    <div class="tw-count-number site-text-black">
                                        <span class="counter">5</span>M+</div>
                                    <p class="icon-content-info">Million daily active users</p>
                                </div>
                            </div>
                        </div>

                        <!--block 2-->
                        <div class="col-lg-4 col-md-4">
                            <div class="counter-outer-two">
                                <div class="icon-content">
                                    <div class="tw-count-number site-text-black">
                                        <span class="counter">9</span>K+</div>
                                    <p class="icon-content-info">Open job positions</p>
                                </div>
                            </div>
                        </div>

                        <!--block 3-->
                        <div class="col-lg-4 col-md-4">
                            <div class="counter-outer-two">
                                <div class="icon-content">
                                    <div class="tw-count-number site-text-black">
                                        <span class="counter">2</span>M+</div>
                                    <p class="icon-content-info">Million stories shared</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <!-- TOP COMPANIES END -->

    <!-- HOW IT WORK SECTION START -->
    <div class="section-full p-t120 p-b90 site-bg-gray twm-how-it-work-area">
                
        <div class="container">

            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                   <div>Working Process</div>                                
                </div>
                <h2 class="wt-title">How It Works</h2>
                
            </div>                  
            <!-- TITLE END-->

            <div class="twm-how-it-work-section3">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="twm-w-process-steps3">
                            <div class="twm-w-pro-top">
                                <span class="twm-large-number  text-clr-sky">01</span>
                                <div class="twm-media bg-clr-sky">
                                    <span><img src="{{ asset('assets/front_assets/images/work-process/icon1.png') }}" alt="icon1"></span>
                                </div>
                            </div>
                            <h4 class="twm-title">Register Your Account</h4>
                            <p>You need to create an account to find the best and preferred job.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="twm-w-process-steps3">
                            <div class="twm-w-pro-top">
                                <span class="twm-large-number text-clr-pink">02</span>
                                <div class="twm-media bg-clr-pink">
                                    <span><img src="{{ asset('assets/front_assets/images/work-process/icon2.png') }}" alt="icon1"></span>
                                </div>
                            </div>
                            <h4 class="twm-title">Apply For Dream Job</h4>
                            <p>You need to create an account to find the best and preferred job.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="twm-w-process-steps3">
                            <div class="twm-w-pro-top">
                                <span class="twm-large-number  text-clr-green">03</span>
                                <div class="twm-media  bg-clr-green">
                                    <span><img src="{{ asset('assets/front_assets/images/work-process/icon3.png') }}" alt="icon1"></span>
                                </div>
                            </div>
                            <h4 class="twm-title">Upload Your Resume</h4>
                            <p>You need to create an account to find the best and preferred job.</p>
                        </div>
                    </div>

                </div>
            </div>                  
        </div>

    </div>   
    <!-- HOW IT WORK SECTION END -->

    <!-- FEATURED SECTION START -->
    <div class="section-full p-t120 p-b90 site-bg-white twm-featured-city-area">
                
        <div class="container">

            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                   <div>Featured Cities</div>                                
                </div>
                <h2 class="wt-title">Browse job offers by 
                    popular locations</h2>
                
            </div>                  
            <!-- TITLE END-->

            <div class="twm-featured-city-section">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <div class="twm-featured-city twm-large-block">
                            <div class="twm-media">
                                <img src="{{ asset('assets/front_assets/images/featured%20-cities/city1.jpg') }}" alt="">
                                <div class="twm-city-info">
                                    <div class="twm-city-jobs">125 Jobs</div>
                                    <h4 class="twm-title"><a href="#">New York City</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="twm-featured-city">
                                    <div class="twm-media">
                                        <img src="{{ asset('assets/front_assets/images/featured%20-cities/city2.jpg') }}" alt="">
                                        <div class="twm-city-info">
                                            <div class="twm-city-jobs">190 Jobs</div>
                                            <h4 class="twm-title"><a href="#">Dubai</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="twm-featured-city">
                                    <div class="twm-media">
                                        <img src="{{ asset('assets/front_assets/images/featured%20-cities/city3.jpg') }}" alt="">
                                        <div class="twm-city-info">
                                            <div class="twm-city-jobs">220 Jobs</div>
                                            <h4 class="twm-title"><a href="#">Shanghai</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>                  
        </div>

    </div>   
    <!-- FEATURED SECTION END -->

    <!-- JOB POST START -->
    <div class="section-full p-t120 p-b90 site-bg-gray twm-bg-ring-wrap2">
        <div class="twm-bg-ring-right"></div>
        <div class="twm-bg-ring-left"></div>
        <div class="container">

            <div class="wt-separator-two-part">
                <div class="row wt-separator-two-part-row">
                    <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                            <div>All Jobs Post</div>                                
                            </div>
                            <h2 class="wt-title">Find Your Career You Deserve it</h2>
                        </div>                  
                        <!-- TITLE END-->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                        <a href="#" class=" site-button">Browse All Jobs</a>
                    </div>
                </div>
            </div>
           
            <div class="section-content">
               <div class="twm-jobs-grid-wrap">
                   <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="twm-jobs-grid-style1  m-b30">
                                <div class="twm-media">
                                    <img src="{{ asset('assets/front_assets/images/jobs-company/pic1.jpg') }}" alt="#">
                                </div>
                                <span class="twm-job-post-duration">1 days ago</span>
                                <div class="twm-jobs-category green"><span class="twm-bg-green">New</span></div>
                                <div class="twm-mid-content">
                                    <a href="#" class="twm-job-title">
                                        <h4>Senior Web Designer , Developer</h4>
                                    </a>
                                    <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                    <a href="#" class="twm-job-websites site-text-primary">https://www.Rapidjobs.com</a>
                                </div>
                                <div class="twm-right-content">
                                    
                                    <div class="twm-jobs-amount">$2000 - $2500 <span>/ Month</span></div>
                                    <a href="#" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="twm-jobs-grid-style1 m-b30">
                                <div class="twm-media">
                                    <img src="{{ asset('assets/front_assets/images/jobs-company/pic2.jpg') }}" alt="#">
                                </div>
                                <span class="twm-job-post-duration">15 days ago</span>
                                <div class="twm-jobs-category green"><span class="twm-bg-brown">Intership</span></div>
                                <div class="twm-mid-content">
                                    <a href="#" class="twm-job-title">
                                        <h4>Senior Rolling Stock Technician</h4>
                                    </a>
                                    <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                    <a href="#" class="twm-job-websites site-text-primary">https://www.Rapidjobs.com</a>
                                </div>
                                <div class="twm-right-content">
                                    <div class="twm-jobs-amount">$7 <span>/ Hour</span></div>
                                    <a href="#" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="twm-jobs-grid-style1  m-b30">
                                <div class="twm-media">
                                    <img src="{{ asset('assets/front_assets/images/jobs-company/pic3.jpg') }}" alt="#">
                                </div>
                                <span class="twm-job-post-duration">6 Month ago</span>
                                <div class="twm-jobs-category green"><span class="twm-bg-purple">Fulltime</span></div>
                                <div class="twm-mid-content">
                                    <a href="#" class="twm-job-title">
                                        <h4 class="twm-job-title">IT Department Manager</h4>
                                    </a>
                                    <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                    <a href="#" class="twm-job-websites site-text-primary">https://www.Rapidjobs.com</a>
                                </div>
                                <div class="twm-right-content">
                                    
                                    <div class="twm-jobs-amount">$2000 - $2500 <span>/ Month</span></div>
                                    <a href="#" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="twm-jobs-grid-style1  m-b30">
                                <div class="twm-media">
                                    <img src="{{ asset('assets/front_assets/images/jobs-company/pic5.jpg') }}" alt="#">
                                </div>
                                <span class="twm-job-post-duration">1 days ago</span>
                                <div class="twm-jobs-category green"><span class="twm-bg-golden">Temporary</span></div>
                                <div class="twm-mid-content">
                                    <a href="#" class="twm-job-title">
                                        <h4 class="twm-job-title">Recreation & Fitness Worker</h4>
                                    </a>
                                    <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                    <a href="#" class="twm-job-websites site-text-primary">https://www.Rapidjobs.com</a>
                                </div>
                                <div class="twm-right-content">
                                    <div class="twm-jobs-amount">$500 - $1000 <span>/ Month</span></div>
                                    <a href="#" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                </div>
                            </div>
                        </div>

                    </div>
                   
               </div>
            </div>
           
        </div>
    </div>
    <!-- JOB POST END -->

    <!-- CANDIDATES START -->
    <div class="section-full p-t120 p-b90 site-bg-white">
        <div class="container">
           
            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                   <div>Candidates</div>                                
                </div>
                <h2 class="wt-title">Featured Candidates</h2>
                
            </div>                  
            <!-- TITLE END-->


            <div class="section-content">
                <div class="twm-blog-post-3-outer-wrap">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <!--Block one-->
                            <div class="twm-candidates-list-style1">
                                <div class="twm-media">
                                    <div class="twm-media-pic">
                                       <img src="{{ asset('assets/front_assets/images/candidates/pic1.jpg') }}" alt="#">
                                    </div>
                                    <div class="twm-candidates-tag"><span>Featured</span></div>
                                </div>
                                <div class="twm-mid-content">
                                    <a href="#" class="twm-job-title">
                                        <h4>Wanda Montgomery </h4>
                                    </a>
                                    <p>Charted Accountant</p>
                                    
                                    <div class="twm-fot-content">
                                        <div class="twm-left-info">
                                           <p class="twm-candidate-address"><i class="feather-map-pin"></i>New York</p>
                                           <div class="twm-jobs-vacancies">$20<span>/ Day</span></div>
                                        </div>
                                        <div class="twm-right-btn">
                                            <a href="#" class="twm-view-prifile site-text-primary">View Profile</a>
                                        </div>
                                   </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <!--Block two-->
                            <div class="twm-candidates-list-style1">
                                <div class="twm-media">
                                    <div class="twm-media-pic">
                                       <img src="{{ asset('assets/front_assets/images/candidates/pic2.jpg') }}" alt="#">
                                    </div>
                                    <div class="twm-candidates-tag"><span>Featured</span></div>
                                </div>
                                <div class="twm-mid-content">
                                    <a href="#" class="twm-job-title">
                                        <h4>Peter Hawkins</h4>
                                    </a>
                                    <p>Medical Professed</p>
                                    
                                    <div class="twm-fot-content">
                                        <div class="twm-left-info">
                                           <p class="twm-candidate-address"><i class="feather-map-pin"></i>New York</p>
                                           <div class="twm-jobs-vacancies">$7<span>/ Hour</span></div>
                                        </div>
                                        <div class="twm-right-btn">
                                            <a href="#" class="twm-view-prifile site-text-primary">View Profile</a>
                                        </div>
                                   </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <!--Block three-->
                            <div class="twm-candidates-list-style1">
                                <div class="twm-media">
                                    <div class="twm-media-pic">
                                       <img src="{{ asset('assets/front_assets/images/candidates/pic3.jpg') }}" alt="#">
                                    </div>
                                    <div class="twm-candidates-tag"><span>Featured</span></div>
                                </div>
                                <div class="twm-mid-content">
                                    <a href="#" class="twm-job-title">
                                        <h4>Ralph Johnson  </h4>
                                    </a>
                                    <p>Bank Manger</p>
                                    
                                    <div class="twm-fot-content">
                                        <div class="twm-left-info">
                                           <p class="twm-candidate-address"><i class="feather-map-pin"></i>New York</p>
                                           <div class="twm-jobs-vacancies">$180<span>/ Day</span></div>
                                        </div>
                                        <div class="twm-right-btn">
                                            <a href="#" class="twm-view-prifile site-text-primary">View Profile</a>
                                        </div>
                                   </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <!--Block Four-->
                            <div class="twm-candidates-list-style1">
                                <div class="twm-media">
                                    <div class="twm-media-pic">
                                       <img src="{{ asset('assets/front_assets/images/candidates/pic4.jpg') }}" alt="#">
                                    </div>
                                    <div class="twm-candidates-tag"><span>Featured</span></div>
                                </div>
                                <div class="twm-mid-content">
                                    <a href="#" class="twm-job-title">
                                        <h4>Randall Henderson </h4>
                                    </a>
                                    <p>IT Contractor</p>
                                    
                                    <div class="twm-fot-content">
                                        <div class="twm-left-info">
                                           <p class="twm-candidate-address"><i class="feather-map-pin"></i>New York</p>
                                           <div class="twm-jobs-vacancies">$90<span>/ Week</span></div>
                                        </div>
                                        <div class="twm-right-btn">
                                            <a href="#" class="twm-view-prifile site-text-primary">View Profile</a>
                                        </div>
                                   </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <!--Block Five-->
                            <div class="twm-candidates-list-style1">
                                <div class="twm-media">
                                    <div class="twm-media-pic">
                                       <img src="{{ asset('assets/front_assets/images/candidates/pic5.jpg') }}" alt="#">
                                    </div>
                                    <div class="twm-candidates-tag"><span>Featured</span></div>
                                </div>
                                <div class="twm-mid-content">
                                    <a href="#" class="twm-job-title">
                                        <h4>Randall Warren</h4>
                                    </a>
                                    <p>Digital & Creative</p>
                                    
                                    <div class="twm-fot-content">
                                        <div class="twm-left-info">
                                           <p class="twm-candidate-address"><i class="feather-map-pin"></i>New York</p>
                                           <div class="twm-jobs-vacancies">$95<span>/ Day</span></div>
                                        </div>
                                        <div class="twm-right-btn">
                                            <a href="#" class="twm-view-prifile site-text-primary">View Profile</a>
                                        </div>
                                   </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <!--Block Six-->
                            <div class="twm-candidates-list-style1">
                                <div class="twm-media">
                                    <div class="twm-media-pic">
                                       <img src="{{ asset('assets/front_assets/images/candidates/pic6.jpg') }}" alt="#">
                                    </div>
                                    <div class="twm-candidates-tag"><span>Featured</span></div>
                                </div>
                                <div class="twm-mid-content">
                                    <a href="#" class="twm-job-title">
                                        <h4>Christina Fischer </h4>
                                    </a>
                                    <p>Charity & Voluntary</p>
                                    
                                    <div class="twm-fot-content">
                                        <div class="twm-left-info">
                                           <p class="twm-candidate-address"><i class="feather-map-pin"></i>New York</p>
                                           <div class="twm-jobs-vacancies">$19<span>/ Hour</span></div>
                                        </div>
                                        <div class="twm-right-btn">
                                            <a href="#" class="twm-view-prifile site-text-primary">View Profile</a>
                                        </div>
                                   </div>
                                </div>
                                
                            </div>
                        </div>                                                         
                    </div>
                    <div class="text-center m-b30">
                        <a href="#" class=" site-button">All  Candidates</a>
                   </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- CANDIDATES END -->
    
    <!-- OUR BLOG START -->
    <div class="section-full p-t120 p-b90 site-bg-light-purple">
        <div class="container">
           
            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                   <div>Our Blogs</div>                                
                </div>
                <h2 class="wt-title">Latest Article</h2>
                
            </div>                  
            <!-- TITLE END-->


            <div class="section-content">
                <div class="twm-blog-post-3-outer-wrap">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <!--Block one-->
                            <div class="blog-post twm-blog-post-3-outer">
                                <div class="wt-post-media">
                                    <a href="#"><img src="{{ asset('assets/front_assets/images/blog/latest/bg10.jpg') }}" alt=""></a>
                                </div>                                    
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date">March 05, 2022</li>
                                            <li class="post-author">By <a href="#">Mark Petter</a></li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                        <h4 class="post-title">
                                            <a href="#">How to convince recruiters.</a>
                                        </h4>
                                    </div>
                                                                          
                                </div>                                
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <!--Block two-->
                            <div class="blog-post twm-blog-post-3-outer">
                                <div class="wt-post-media">
                                    <a href="#"><img src="{{ asset('assets/front_assets/images/blog/latest/bg11.jpg') }}" alt=""></a>
                                </div>                                    
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date">March 05, 2022</li>
                                            <li class="post-author">By <a href="#">David Wish</a></li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                        <h4 class="post-title">
                                            <a href="#">5 things to know about the March.</a>
                                        </h4>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <!--Block three-->
                            <div class="blog-post twm-blog-post-3-outer">
                                <div class="wt-post-media">
                                    <a href="#"><img src="{{ asset('assets/front_assets/images/blog/latest/bg12.jpg') }}" alt=""></a>
                                </div>                                    
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date">March 05, 2022</li>
                                            <li class="post-author">By <a href="#">Mike Doe</a></li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                        <h4 class="post-title">
                                            <a href="#">Job Board is the most important</a>
                                        </h4>
                                    </div>
                                </div>                                
                            </div>
                        </div>                                                        
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- OUR BLOG END -->
</div>
<!-- CONTENT END -->
@endsection