<!DOCTYPE html>
<?php 
    session_start();
    require_once "./config/config.php";
    if(!isset($_SESSION['visitor'])){
        $ip = $_SERVER['REMOTE_ADDR'];
        $sql = "INSERT INTO `visitors`( `ipAdd`) VALUES ('$ip')";
        if(mysqli_query($conn,$sql)){
            $_SESSION['visitor'] = "True";
        }
    }
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Crypto Technology Center</title>
<!-- [ FONT-AWESOME ICON ] 
=========================================================================================================================-->
<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

<!-- [ PLUGIN STYLESHEET ]
=========================================================================================================================-->
<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

<!-- [ Boot STYLESHEET ]
=========================================================================================================================-->
<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
       
<!-- [ DEFAULT STYLESHEET ] 
=========================================================================================================================-->
	
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/color/rose.css">
<style>
    body{
        padding: 0;
        margin: 0;
    }
    .home-products{
        display: flex;
        grid-gap: 3;
    }
    .home-products>div{
        background: teal;
        border-radius:6px;
    }
    @media screen and (max-width:990px) {
        #bs-example-navbar-collapse-1 .navbar-nav li{
            background: #000;
        }
        #bs-example-navbar-collapse-1 .navbar-nav li a h3{
            color:white;
        }
        
    }
    @media screen and (max-width:750) {
         .home-products{
            /* display: grid;
            grid-template-columns: 1fr;
            grid-gap: 3; */
        }
    }
</style>
</head>
<body >

<!-- [ LOADERs ]
================================================================================================================================-->
<div class="preloader">
<div class="loader theme_background_color">       
<span></span>
</div>
</div>

<!-- [ /PRELOADER ]
=============================================================================================================================-->

<!-- [WRAPPER ]

=============================================================================================================================-->
<div class="wrapper">

    <!-- [NAV]
    ============================================================================================================================-->    
    <!-- Navigation
        ==========================================-->
        
            <?php require_once "navbar.php"; ?>

    <!-- [/NAV]
    ============================================================================================================================--> 

    <!-- [/MAIN-HEADING]
    ============================================================================================================================--> 
    <section class="main-heading" id="home">
        <div class="overlay" style="background-image:url(./images/globe.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 text-center">
                        <h1 class="main-heading-title"><span class="main-element themecolor" data-elements="Oline Services, Buy your Products, We are here for you"></span></h1>
                        <h1 class="main-heading-title"><span class="main-element themecolor" data-elements="Crypto Technology Center,CTC"></span></h1>
                        <p class="main-heading-text">
                            <h3 style="padding:4rem;">
                                Welcome to Crypto Technology Center: We are here for you! <br>
                                Come And work with us.
                            </h3>
                        </p>
                
                        <div class="btn-bar">
                        <a href="signin.php" class="btn btn-custom theme_background_color">Ge Started</a>
                        <a href="#eight" class="btn btn-custom-outline">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center" >
                       <h1 class="text-left">
                           We provide different services including photo printing, video production, 
                           Internaships, teaching digital skills and computer skills at a fordable price.
                       </h1>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    
    <section class="main-heading">
        <?php require_once "productComp.php"; ?>
    </section>
        
    
    <!-- [/MAIN-HEADING]
    ============================================================================================================================-->

    <!-- [INSPIRATION]
    ============================================================================================================================-->
    <section class="inspiration" id="four">
        <div class="overlay">
            <div class="container">
                <div class="row">
                  <article class="col-md-12 text-center">
                      <div class="intermediate-container">
                          <div class="subheading">
                              <h4>Are You Ready To <span class="themecolor">Enjoy?</span></h4>
                          </div>
                        <div class="heading">
                            <h2>inspire your customer here!</h2>
                          </div>
                                      
                          <div class="">
                            <a class="btn btn-custom-outline" href="signin.php"><span>get started</span></a>
                          </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- [/INSPIRATION]
    ============================================================================================================================-->
    
    
    <!-- [/SERVICES]
    ============================================================================================================================-->
    <section class="services white-background black" id="seven">
        
            <?php require_once "goodin.php"; ?>

    </section>
    
    
    
    <!-- [/SERVICES]
    ============================================================================================================================-->
    <!-- [/about]
    ==================================================================================================================-->

    <section class="services black-background white" id="two">
        
        <?php require_once "footer.php"; ?>
        
    </section>

    <!-- [/about]
    ========================================================================================================== -->
    
    <!-- [FOOTER]
    ============================================================================================================================-->
    <footer class="site-footer section-spacing text-center " id="eight">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p class="footer-links"><a href="#" style="color:#000;">Terms of Use</a> <a href="#" style="color:#000;">Privacy Policy</a></p>
                </div>
                <div class="col-md-4"> <small style="color:#000;">&copy; 2022 Crypto Technology Center reserved.</small></div>
                <div class="col-md-4"> 
                    <!--social-->
                    <ul class="social">
                        <li><a href="https://twitter.com/MustaphaIconic?t=kCyzop4wvjXIxraGBNDR6g&s=09" target="_blank"><i class="fa fa-twitter "></i></a></li>
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://youtu.be/of3hzZZ1Mxc" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="https://www.instagram.com/laosshivan" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="wa.me:+250787328089" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                    <!--social end--> 
                </div>
            </div>
        </div>
    </footer>
    
    <!-- [/FOOTER]
    ============================================================================================================================-->
    </div>

<!-- [ /WRAPPER ]
=============================================================================================================================-->
	
<!-- [ DEFAULT SCRIPT ] -->
	
<script src="library/modernizr.custom.97074.js"></script>
<script src="library/jquery-1.11.3.min.js"></script>
<script src="library/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	
	
<!-- [ PLUGIN SCRIPT ] -->
        
<script src="library/vegas/vegas.min.js"></script>
<script src="js/plugins.js"></script>
        
<!-- [ TYPING SCRIPT ] -->
         
<script src="js/typed.js"></script>
         
<!-- [ COUNT SCRIPT ] -->
         
<script src="js/fappear.js"></script>
<script src="js/jquery.countTo.js"></script>
	
<!-- [ SLIDER SCRIPT ] -->  
        
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
        
        
<!-- [ COMMON SCRIPT ] -->
	<script src="js/common.js"></script>
</body>
</html>