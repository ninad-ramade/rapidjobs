<?php
//ini_set('display_errors', 1);
include_once 'config.php';
session_start();
?>
<!doctype html>
<html>
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAVICONS ICON -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png')" />

    <title>RapidJobs</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="assets/css/feather.css"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="assets/css/lc_lightbox.css"><!-- Lc light box popup -->     
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css"><!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap5.min.css"><!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="assets/css/select.bootstrap5.min.css"><!-- DASHBOARD select bootstrap  STYLE SHEET  -->     
    <link rel="stylesheet" type="text/css" href="assets/css/dropzone.css"><!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="assets/css/scrollbar.css"><!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="assets/css/datepicker.css"><!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="assets/css/flaticon.css"> <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"><!-- MAIN STYLE SHEET -->
	
    <!-- JAVASCRIPT  FILES ========================================= --> 
    <script  src="assets/js/jquery-3.6.0.min.js"></script><!-- JQUERY.MIN JS -->
    <script  src="assets/js/jquery-ui.min.js"></script><!-- JQUERY.MIN JS -->
    <script  src="assets/js/popper.min.js"></script><!-- POPPER.MIN JS -->
    <script  src="assets/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script  src="assets/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
    <script  src="assets/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
    <script  src="assets/js/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script  src="assets/js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
    <script  src="assets/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
    <script  src="assets/js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
    <script  src="assets/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
    <script  src="assets/js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
    <script  src="assets/js/lc_lightbox.lite.js" ></script><!-- IMAGE POPUP -->
    <script  src="assets/js/bootstrap-select.min.js"></script><!-- Form js -->
    <script  src="assets/js/dropzone.js"></script><!-- IMAGE UPLOAD  -->
    <script  src="assets/js/jquery.scrollbar.js"></script><!-- scroller -->
    <script  src="assets/js/bootstrap-datepicker.js"></script><!-- scroller -->
    <script  src="assets/js/jquery.dataTables.min.js"></script><!-- Datatable -->
    <script  src="assets/js/dataTables.bootstrap5.min.js"></script><!-- Datatable -->
    <script  src="assets/js/chart.js"></script><!-- Chart -->
    <script  src="assets/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
    <script  src="assets/js/angular.min.js"></script>
    <script  src="assets/js/app.js"></script>
    <script  src="assets/js/factories/validationFactory.js"></script>
    <script  src="assets/js/services/ajaxService.js"></script>
    <script  src="assets/js/services/fieldService.js"></script>
    <script src="assets/js/controllers/signUpController.js"></script>
    <script src="assets/js/controllers/loginController.js"></script>
    <script src="assets/js/controllers/logoutController.js"></script>
    <script src="assets/js/controllers/jobSearchController.js"></script>
    <script>
    var baseUrl = '<?php echo baseurl; ?>';
    var action = '<?php echo $_GET['action']; ?>';
    </script>
    <!-- Scripts -->
</head>
<body ng-app="rapidjobs" ng-cloak>
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
    	<?php include 'views/header.php'; ?>
    	<?php /* ?>
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
        <?php */ ?>
        <?php include 'views/content.php'; ?>
        
        <?php include 'views/footer.php'; ?>
        
        <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    <!--Model Popup Section Start-->
        <!--Signup popup -->
        <?php include'views/signup.php'; ?>
        <!--Login popup -->
        <?php include'views/login.php'; ?>
    <!--Model Popup Section End-->
    </div>
</body>
</html>