<!-- CONTENT START -->
<div class="page-content" ng-controller="jobSearchController">

    <!--Banner Start-->
    <div class="twm-home3-banner-section site-bg-white bg-cover" style="background: #1967d2;">
        <div class="twm-home3-inner-section">
            <div class="twm-bnr-mid-section">
                <div class="twm-bnr-discription"></div>

                <div class="twm-bnr-search-bar">
                    <form>
                        <div class="row">
                            <!--Title-->
                            <div class="form-group col-xl-10 col-lg-10 col-md-10">
                                <label>Job Title</label>
                                <div class="twm-inputicon-box">
                                	<input name="jobTitle" type="text" ng-model="jobSearch.jobTitle.value" class="form-control" placeholder="Type your keyword, then click search to find your perfect job.">
                               	</div>
                            </div>

                            <?php /* ?>
                            <!--All Category-->
                            <div class="form-group col-xl-4 col-lg-6 col-md-6">
                                <label>Type</label>
                                <select class="wt-search-bar-select selectpicker"  data-live-search="true" title="" id="j-All_Category" data-bv-field="size">
                                    <option disabled selected value="">Select Category</option>
                                    <option selected>All Category</option>
                                    <option>Web Designer</option>
                                    <option>Developer</option>
                                    <option>Acountant</option>
                                </select>
                            </div>
                            <?php */ ?>
                            <!--Location-->
                            <?php /* ?>
                            <div class="form-group col-xl-4 col-lg-4 col-md-4">
                                <label>Location</label>
                                <div class="twm-inputicon-box">
                                    <input name="jobLocation" type="text" ng-model="jobSearch.jobLocation.value" class="form-control" placeholder="Location">
                                    <i class="twm-input-icon fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <?php */ ?>
                            <!--Find job btn-->
                            <div class="form-group col-xl-2 col-lg-6 col-md-6">
                                <button type="button" class="site-button" ng-click="getJobs()">Find Job</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <!--Banner End-->


    <!-- HOW IT WORK SECTION START -->
    <div class="section-full p-t30 site-bg-gray twm-how-it-work-area" ng-hide="jobsearch">
                
        <div class="container">

            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <h2 class="wt-title">How It Works</h2>
                
            </div>                  
            <!-- TITLE END-->

            <div class="twm-how-it-work-section3">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="twm-w-process-steps3">
                            <div class="twm-w-pro-top">
                                <span class="twm-large-number  text-clr-sky">1</span>
                                <div class="twm-media bg-clr-sky">
                                    <span><img src="assets/images/work-process/icon1.png" alt="icon1"></span>
                                </div>
                            </div>
                            <h4 class="twm-title">Create Your Account</h4>
                            <p>You need to create an account to find the best and preferred job.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="twm-w-process-steps3">
                            <div class="twm-w-pro-top">
                                <span class="twm-large-number text-clr-pink">2</span>
                                <div class="twm-media bg-clr-pink">
                                    <span><img src="assets/images/work-process/icon2.png" alt="icon1"></span>
                                </div>
                            </div>
                            <h4 class="twm-title">Upload Your Resume</h4>
                            <p>Upload your resume to get the customised jobs suggestions.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="twm-w-process-steps3">
                            <div class="twm-w-pro-top">
                                <span class="twm-large-number  text-clr-green">3</span>
                                <div class="twm-media  bg-clr-green">
                                    <span><img src="assets/images/work-process/icon3.png" alt="icon1"></span>
                                </div>
                            </div>
                            <h4 class="twm-title">Apply For Job</h4>
                            <p>Find and apply for the best and preferred job.</p>
                        </div>
                    </div>

                </div>
            </div>                  
        </div>

    </div>   
    <!-- HOW IT WORK SECTION END -->

    <!-- FEATURED SECTION START -->
    <?php /* ?>
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
                                <img src="assets/images/featured%20-cities/city1.jpg" alt="">
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
                                        <img src="assets/images/featured%20-cities/city2.jpg" alt="">
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
                                        <img src="assets/images/featured%20-cities/city3.jpg" alt="">
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
    <?php */ ?>   
    <!-- FEATURED SECTION END -->

    <!-- JOB POST START -->
    <div class="section-full p-b30 site-bg-gray twm-bg-ring-wrap2" id="jobs-section">
        <div class="twm-bg-ring-right"></div>
        <div class="twm-bg-ring-left"></div>
        <div class="container">

            <div class="wt-separator-two-part">
                <div class="row wt-separator-two-part-row">
                    <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                            <div ng-class="jobsearch ? 'font24' : ''">{{jobsearch ? jobParams.jobTitle + ' Jobs' : 'Hot Jobs'}}</div>                                
                            </div>
                            <h2 class="wt-title" ng-hide="jobsearch">Find Your Career You Deserve it</h2>
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
                        <div class="col-lg-6 col-md-6" ng-repeat="job in jobs">
                            <div class="twm-jobs-grid-style1 m-b0">
                            	<?php /* ?>
                                <div class="twm-media">
                                    <img src="assets/images/jobs-company/pic1.jpg" alt="#">
                                </div>
                                <?php */ ?>
                                <div class="twm-jobs-category green" ng-if="job.badge"><span ng-class="job.badgeClass">{{job.badge}}</span></div>
                                <div class="twm-mid-content">
                                    <a href="#" class="twm-job-title">
                                        <h4>{{job.Role}}</h4>
                                    </a>
                                    <p class="twm-job-address company-name">{{job.clientname}}</p>
                                    <p><i class="feather-briefcase"></i> Min. {{job.relavantexp}} Yrs <span class="text-separator-custom">|</span> &#8377; {{job.BUDGETFROM}} - {{job.BUDGETTO}} Lacs PA <span class="text-separator-custom">|</span> <i class="feather-map-pin"></i> {{job.worklocation}}</p>
                                    <p class="job-desc"><i class="feather-file-text" ng-if="job.JobDescription"></i> {{job.JobDescription}}</p>
                                    <p class="hot-skills"><span ng-repeat="skill in job.skills">{{skill}}</span></p>
                                    <?php /* ?><a href="#" class="twm-job-websites site-text-primary">https://www.Rapidjobs.com</a><?php */ ?>
                                </div>
                                <div class="twm-right-content">
                                    <span class="time-ago">{{job.reqdateago}}</span>
                                    <?php /* ?><a href="#" class="twm-jobs-browse site-text-primary">Browse Job</a><?php */ ?>
                                    <button type="button" class="site-button site-button-small">Apply</button>
                                </div>
                            </div>
                        </div>
						<?php /* ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="twm-jobs-grid-style1 m-b30">
                                <div class="twm-media">
                                    <img src="assets/images/jobs-company/pic2.jpg" alt="#">
                                </div>
                                <span class="twm-job-post-duration">15 days ago</span>
                                <div class="twm-jobs-category green"><span class="twm-bg-brown">Intership</span></div>
                                <div class="twm-mid-content">
                                    <a href="job-detail.html" class="twm-job-title">
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
                                    <img src="assets/images/jobs-company/pic3.jpg" alt="#">
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
                                    <img src="assets/images/jobs-company/pic5.jpg" alt="#">
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
                        <?php */ ?>
                    </div>
                   
               </div>
            </div>
           
        </div>
    </div>
    <!-- JOB POST END -->

    <!-- TOP COMPANIES START -->
    <div class="section-full p-t30 p-b60 site-bg-white twm-companies-wrap" ng-hide="jobsearch">
          
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
                            <a href="#"><img src="assets/images/client-logo2/w1.png" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="assets/images/client-logo2/w2.png" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="assets/images/client-logo2/w3.png" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="assets/images/client-logo2/w4.png" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="assets/images/client-logo2/w5.png" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="assets/images/client-logo2/w6.png" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="assets/images/client-logo2/w1.png" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="assets/images/client-logo2/w2.png" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="assets/images/client-logo2/w3.png" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="#"><img src="assets/images/client-logo2/w5.png" alt=""></a></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
    </div>
    <!-- TOP COMPANIES END -->
    <!-- CANDIDATES START -->
    <?php /* ?>
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
                                       <img src="assets/images/candidates/pic1.jpg" alt="#">
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
                                       <img src="assets/images/candidates/pic2.jpg" alt="#">
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
                                       <img src="assets/images/candidates/pic3.jpg" alt="#">
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
                                       <img src="assets/images/candidates/pic4.jpg" alt="#">
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
                                       <img src="assets/images/candidates/pic5.jpg" alt="#">
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
                                       <img src="assets/images/candidates/pic6.jpg" alt="#">
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
    <?php */ ?>
    <!-- CANDIDATES END -->
    
    <!-- OUR BLOG START -->
    <?php /* ?>
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
                                    <a href="#"><img src="assets/images/blog/latest/bg10.jpg" alt=""></a>
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
                                    <a href="#"><img src="assets/images/blog/latest/bg11.jpg" alt=""></a>
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
                                    <a href="#"><img src="assets/images/blog/latest/bg12.jpg" alt=""></a>
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
    <?php */ ?>
    <!-- OUR BLOG END -->


</div>
<!-- CONTENT END -->