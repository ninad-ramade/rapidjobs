<!-- HEADER START -->
<header  class="site-header header-style-light mobile-sider-drawer-menu <?php if(!empty($_GET['action'])) { echo 'classic-header'; }?>">

    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">  
                            
            <div class="container-fluid clearfix"> 
        
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="/">
                            <strong>RapidJobs</strong>
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
                        <li class="has-child"><a href="/">Home</a>                                                          
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
                    </ul>

                </div>
                
                <!-- Header Right Section-->
                <div class="extra-nav header-2-nav">
                    <div class="extra-cell">
                    	<?php /* ?>
                        <div class="header-search">
                            <a href="#search" class="header-search-icon"><i class="feather-search"></i></a>
                        </div>
                        <?php */ ?>                             
                    </div>
                    <div class="extra-cell">
                        <div class="header-nav-btn-section" ng-controller="logoutController">
                            <div class="twm-nav-btn-left">
                            	<?php if(empty($_SESSION['user'])) { ?>
                                <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup" role="button">
                                    <i class="feather-log-in"></i> Sign Up
                                </a>
                                <?php } else { ?>
                                <a class="twm-nav-sign-up" role="button" ng-click="logout()">
                                    <i class="feather-log-out"></i> Log Out
                                </a>
                                <?php } ?>
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