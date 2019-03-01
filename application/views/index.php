<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html class="no-js" lang="zxx">
<style type="text/css">
    .sds-skin-default.sds-style-light{
        display: none;
    }
    .pull-right{
        padding-top: 20px;
    }
    @media only screen and (max-width: 600px) { 
.logohome{

width: 199px;
padding-left: 21px;
}
.app-description .ad-mobiles .ad-frame-two{
    left: 18%;
}
.count{
    margin-left: -43px;
}
}
</style>
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dicatto</title>        
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/favicon.png">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/assets/bootstrap.css">
        
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/assets/font-awesome.min.css">
        
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/assets/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/assets/owl.transitions.css">
        
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/assets/animate.css">
		
		<!-- Google Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Exo:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
     
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/assets/responsive.css">
        <script src="js/vendor/modernizr-3.3.1.min.js"></script>
		
		<!-- Color Switcher -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/switcher.core.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/switcher.helper.css">
		<link id="main-style" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles/blue.css">
		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/assets/respond.min.js"></script>
		<![endif]-->
    </head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- =========================
     HEADER SECTION
     ========================= -->
<header id="intro">
	<nav class="navbar" id="main-nav">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#rx-navbar-collapse" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
                <img src="<?php echo base_url(); ?>assets/images/dicattologo.png" class="img-responsive logohome" alt="">		
        </div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="rx-navbar-collapse">
		  <ul class="nav navbar-nav pull-right">
			<li><a data-scroll href="#intro">Home</a></li>
			<li><a data-scroll href="#app-features">About Us</a></li>
			<!-- <li><a data-scroll href="#screenshots">Screenshoot</a></li>
			<li><a data-scroll href="#pricing-plan">Pricing</a></li>
			<li><a data-scroll href="#app-download">Download</a></li> -->
            <li><a data-scroll href="#contact">Contact</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

    <!-- =========================
            Intro 
        ========================== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 featured-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                <img src="<?php echo base_url(); ?>assets/images/slider.png" class="img-responsive" alt="app-o2">
             </div>
               
            </div>
        </div>
    </section>

</header><!-- /END HEADER -->



<!-- =========================
        FEATURES
    ========================== -->
<!-- <section id="app-features">
    <div class="container">
    <div class="col-md-12 featured-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                <img src="images/slider.png" class="img-responsive" alt="app-o2">
    </div>
    </div>
</section> -->

<!-- <section id="app-features">
    <div class="container">
        
        <div class="row">
            <div class="col-md-4 features-left wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                <div class="single-feature sf-top">
                    <div class="row">
                        <div class="col-md-8 col-sm-6 single-feature-content">
                            <h3>Unique Design</h3>
                            <p>Lorem ipsum dolor sit ametcon sectetur adipiscingelit Etiam at ipsum at ligula vestibu</p>
                        </div>
                        <div class="col-md-4 col-sm-6 single-feature-icon">
                            <div class="feature-icon-box">
                                <div class="icon-hover">
                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-feature sf-center">
                    <div class="row">
                        <div class="col-md-8 col-sm-6 single-feature-content">
                            <h3>Flat Design</h3>
                            <p>Lorem ipsum dolor sit ametcon sectetur adipiscingelit Etiam at ipsum at ligula vestibu</p>
                        </div>
                        <div class="col-md-4 col-sm-6 single-feature-icon">
                            <div class="feature-icon-box">
                                <div class="icon-hover">
                                    <i class="fa fa-list-ul" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-feature sf-bottom">
                    <div class="row">
                        <div class="col-md-8 col-sm-6 single-feature-content">
                            <h3>Easy Settings</h3>
                            <p>Lorem ipsum dolor sit ametcon sectetur adipiscingelit Etiam at ipsum at ligula vestibu</p>
                        </div>
                        <div class="col-md-4 col-sm-6 single-feature-icon">
                            <div class="feature-icon-box">
                                <div class="icon-hover">
                                    <i class="fa fa-gears" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 featured-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                <img src="images/slider.png" class="img-responsive" alt="app-o2">
            </div>
            <div class="col-md-4 features-right wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".3s">
                <div class="single-feature sf-top">
                    <div class="row">
                        <div class="col-sm-4 single-feature-icon">
                            <div class="feature-icon-box">
                                <div class="icon-hover">
                                    <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 single-feature-content">
                            <h3>Regular Updates</h3>
                            <p>Lorem ipsum dolor sit ametcon sectetur adipiscingelit Etiam at ipsum at ligula vestibu</p>
                        </div>
                    </div>
                </div>
                <div class="single-feature sf-center">
                    <div class="row">
                        <div class="col-sm-4 single-feature-icon">
                            <div class="feature-icon-box">
                                <div class="icon-hover">
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 single-feature-content">
                            <h3>User Friendly</h3>
                            <p>Lorem ipsum dolor sit ametcon sectetur adipiscingelit Etiam at ipsum at ligula vestibu</p>
                        </div>
                    </div>
                </div>
                <div class="single-feature sf-bottom">
                    <div class="row">
                        <div class="col-sm-4 single-feature-icon">
                            <div class="feature-icon-box">
                                <div class="icon-hover">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 single-feature-content">
                            <h3>24/7 Support</h3>
                            <p>Lorem ipsum dolor sit ametcon sectetur adipiscingelit Etiam at ipsum at ligula vestibu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- =========================
    App Description
    ========================== -->
<section class="app-description" id="app-features">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-12 ad-mobiles text-center">
                <!-- <div class="ad-frame-one wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
                    <img src="images/mobile02.png" alt="">
                </div> -->
                <div class="ad-frame-two wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s">
                    <img src="<?php echo base_url(); ?>assets/images/screen.png" alt="">
                </div>
            </div>
            <div class="col-sm-7 col-sm-12">
                <div class="col-md-12 heading">
                    <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">About dicatto</h2>
                </div>
                <div class="col-md-12 app-description-content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <ul class="" style="font-size: 21px;line-height: 35px;">
                    <li>Digital ease with connectedness</li>
                    <li>Convenient modes of delivery</li>
                    <li>Attractive pricing</li>
                    <li>Direct benefits to sellers and buyers</li>
                    <li>Platform for physical products and digital services</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>



<section class="contact1 text-center">
    <div class="container">
   <div class="col-md-12 heading">
                <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Coming Soon</h2>
               
            </div>
  <ul class="count">
    <li><span id="days"></span>days</li>
    <li><span id="hours"></span>Hours</li>
    <li><span id="minutes"></span>Minutes</li>
    <li><span id="seconds"></span>Seconds</li>
  </ul>
</div>
</section>



<!-- =========================
    Benefits
    ========================== -->
<!-- <section class="benifits">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Your Benefits</h2>
                <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan </p>
            </div>
            <div class="col-sm-4 benefits-left wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
                <div class="row">
                    <div class="col-sm-9">
                        <h3>Reliable And Secure Platform</h3>
                        <p>Lorem ipsum dolor sit amet consecte tur adipisic elit  consectetur adipisicing eli sed do eiusmod </p>
                    </div>
                    <div class="col-sm-3">
                        <div class="bl-icon"><i class="fa fa-lock"></i></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <h3>Attach Large File Easily</h3>
                        <p>Lorem ipsum dolor sit amet consecte tur adipisic elit  consectetur adipisicing eli sed do eiusmod </p>
                    </div>
                    <div class="col-sm-3">
                        <div class="bl-icon"><i class="fa fa-file-archive-o"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 center-mobile-frame wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                <div class="benifits-image">
                    <img src="images/mobile04.png" alt="">
                </div>
                <span class="bullets-left"></span>
                <span class="bullets-right"></span>
            </div>
            <div class="col-sm-4 benefits-right wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".2s">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="br-icon"><i class="fa fa-eye"></i></div>
                    </div>
                    <div class="col-sm-9">
                        <h3>Step On The New Level</h3>
                        <p>Lorem ipsum dolor sit amet consecte tur adipisic elit  consectetur adipisicing eli sed do eiusmod </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="br-icon"><i class="fa fa-thumbs-up"></i></div>
                    </div>
                    <div class="col-sm-9">
                        <h3>Stunning Flexibility</h3>
                        <p>Lorem ipsum dolor sit amet consecte tur adipisic elit  consectetur adipisicing eli sed do eiusmod </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- =========================
    App Screenshots
    ========================== -->
<!-- <section class="app-screenshot" id="screenshots">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">App Screenshot</h2>
                <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan </p>
            </div>
        </div>
    </div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 screenshots wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                <div id="screenshot-carousel" class="owl-carousel">
                    <div><img src="images/screen01.png" alt=""></div>
                    <div><img src="images/screen02.png" alt=""></div>
                    <div><img src="images/screen03.png" alt=""></div>
                    <div><img src="images/screen04.png" alt=""></div>
                    <div><img src="images/screen01.png" alt=""></div>
                    <div><img src="images/screen02.png" alt=""></div>
                    <div><img src="images/screen03.png" alt=""></div>
                    <div><img src="images/screen01.png" alt=""></div>
                    <div><img src="images/screen02.png" alt=""></div>
                    <div><img src="images/screen03.png" alt=""></div>
                    <div><img src="images/screen04.png" alt=""></div>
                    <div><img src="images/screen01.png" alt=""></div>
                    <div><img src="images/screen02.png" alt=""></div>
                    <div><img src="images/screen03.png" alt=""></div>
                    <div><img src="images/screen01.png" alt=""></div>
                    <div><img src="images/screen02.png" alt=""></div>
                    <div><img src="images/screen03.png" alt=""></div>
                    <div><img src="images/screen04.png" alt=""></div>
                    <div><img src="images/screen01.png" alt=""></div>
                    <div><img src="images/screen02.png" alt=""></div>
                    <div><img src="images/screen03.png" alt=""></div>
                    <div><img src="images/screen01.png" alt=""></div>
                    <div><img src="images/screen02.png" alt=""></div>
                    <div><img src="images/screen03.png" alt=""></div>
                    <div><img src="images/screen04.png" alt=""></div>
                </div>
            </div>
		</div>
	</div>
</section> -->


<!-- =========================
    Pricing Plan
    ========================== -->
<!-- <section class="pricing-plan" id="pricing-plan">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Our Pricing Plan</h2>
                <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan </p>
            </div>
            <div class="pricing-wrapper">
                <div class="row">
                    <div class="col-sm-4 no-padding wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="plan-single f-plan">
                            <div class="pricing-header">
                                <h4>Basic</h4>
                                <p>For Freelancer</p>
                            </div>
                            <div class="price">
                                <p>
                                    <sup class="currency">$</sup>
                                    49
                                    <sub class="duration">month</sub>
                                </p>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled">
                                    <li>Total User <span>15</span></li>
                                    <li>Unlimited Styles <span><i class="fa fa-check"></i></span></li>
                                    <li>Advanced Protection <span><i class="fa fa-check"></i></span></li>
                                    <li>Cloud Storage <span><i class="fa fa-close"></i></span></li>
                                    <li>Backup Service <span><i class="fa fa-close"></i></span></li>
                                    <li>24/7 Customer Service <span><i class="fa fa-close"></i></span></li>
                                </ul>
                                <p><a href="#" class="choose-plan-btn">Choose Plan</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 no-padding wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="plan-single featured-plan">
                            <div class="pricing-header">
                                <h4>Recommended</h4>
                                <p>For Professionals</p>
                            </div>
                            <div class="price">
                                <p>
                                    <sup class="currency">$</sup>
                                    149
                                    <sub class="duration">month</sub>
                                </p>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled">
                                    <li>Total User <span>100</span></li>
                                    <li>Unlimited Styles <span><i class="fa fa-check"></i></span></li>
                                    <li>Advanced Protection <span><i class="fa fa-check"></i></span></li>
                                    <li>Cloud Storage <span><i class="fa fa-close"></i></span></li>
                                    <li>Backup Service <span><i class="fa fa-close"></i></span></li>
                                    <li>24/7 Customer Service <span><i class="fa fa-check"></i></span></li>
                                </ul>
                                <p><a href="#" class="choose-plan-btn">Choose Plan</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 no-padding wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="plan-single t-plan">
                            <div class="pricing-header">
                                <h4>Advanced</h4>
                                <p>For Company</p>
                            </div>
                            <div class="price">
                                <p>
                                    <sup class="currency">$</sup>
                                    449
                                    <sub class="duration">month</sub>
                                </p>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled">
                                    <li>Total User <span>500</span></li>
                                    <li>Unlimited Styles <span><i class="fa fa-check"></i></span></li>
                                    <li>Advanced Protection <span><i class="fa fa-check"></i></span></li>
                                    <li>Cloud Storage <span><i class="fa fa-check"></i></span></li>
                                    <li>Backup Service <span><i class="fa fa-check"></i></span></li>
                                    <li>24/7 Customer Service <span><i class="fa fa-check"></i></span></li>
                                </ul>
                                <p><a href="#" class="choose-plan-btn">Choose Plan</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- =========================
    Subscribe
    ========================== -->
<!-- <section class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <h4>Subscribe Now</h4>
            </div>
            <div class="col-sm-8 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".6s">
                <form id="mc-form">
                    <input type="email" id="mc-email" placeholder="Your Email">
                    <input type="submit" value="Subscribe">
					<label for="mc-email"></label>
                </form>
            </div>
        </div>
    </div>
</section> -->


<!-- =========================
    Video
    ========================== -->
<!-- <section class="app-video">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Description With Video</h2>
                <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan </p>
            </div>
            <div class="col-sm-12 video-wrapper wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                <iframe src="https://player.vimeo.com/video/90299717?title=0&amp;byline=0&amp;portrait=0" width="945" height="532"></iframe>
            </div>
        </div>
    </div>
</section>
 -->

<!-- =========================
    Download App
    ========================== -->
<!-- <section class="app-downloads" id="app-download">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Get Free <span>RxApp</span> Today</h2>
                <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan </p>
            </div>
            <div class="col-sm-12 app-download-btns wow bounceInDown" data-wow-duration="1.5s" data-wow-delay=".3s">
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-apple"></i> App Store</a></li>
                    <li><a href="#"><i class="fa fa-android"></i> Play Store</a></li>
                </ul>
            </div>
        </div>
        <div class="review-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".6s">
                <div id="app-reviews" class="owl-carousel">
                    <div>
                        <div class="review-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since they 1500s, when an unknown printer took a galley of type and scrambled.</p>
                        </div>
                        <div class="client-details">
                            <img src="images/client-01.png" alt="" class="img-circle img-responsive">
                            <p>
                                <span>Jonathon Smith</span>
                                <span>Apple Factory</span>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="review-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since they 1500s, when an unknown printer took a galley of type and scrambled.</p>
                        </div>
                        <div class="client-details">
                            <img src="images/client-02.png" alt="" class="img-circle img-responsive">
                            <p>
                                <span>Jonathon Smith</span>
                                <span>Apple Factory</span>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="review-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since they 1500s, when an unknown printer took a galley of type and scrambled.</p>
                        </div>
                        <div class="client-details">
                            <img src="images/client-03.png" alt="" class="img-circle img-responsive">
                            <p>
                                <span>Jonathon Smith</span>
                                <span>Apple Factory</span>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="review-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since they 1500s, when an unknown printer took a galley of type and scrambled.</p>
                        </div>
                        <div class="client-details">
                            <img src="images/client-02.png" alt="" class="img-circle img-responsive">
                            <p>
                                <span>Jonathon Smith</span>
                                <span>Apple Factory</span>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="review-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since they 1500s, when an unknown printer took a galley of type and scrambled.</p>
                        </div>
                        <div class="client-details">
                            <img src="images/client-01.png" alt="" class="img-circle img-responsive">
                            <p>
                                <span>Jonathon Smith</span>
                                <span>Apple Factory</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section> -->


<!-- =========================
    Contact Us
    ========================== -->
<section class="contact" id="contact">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 heading">
                <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Contact Us</h2>
               
            </div>
            <div class="col-sm-12 col-md-4 text-center fadeInUp">
                <img src="<?php echo base_url();?>assets/images/contact.png" width="120" class="fadeInUp">        
                <h3 class="fadeInUp">+91 9112234515</h3>
                 <h3 class="fadeInUpl">admin@dicatto.com</h3>
                
                
            </div>
            <div class="col-sm-12 col-md-8 contact-form">
                <form id="ajax-contact" method="post" action="">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <input type="text" placeholder="Your Name" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <input type="email" placeholder="Your Email" id="email" name="email" required>
                            </div>
                            <div class="col-sm-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".6s">
                                <textarea placeholder="Message" id="message" name="message" required></textarea>
                            </div>
                            <div class="col-sm-12 form-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".9s">
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
				<div id="form-messages"></div>
            </div><!-- Ends Contact Form -->
        </div> 
    </div>
</section>



<!-- =========================
    FOOTER
    ========================== -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 footer-content">
                <h4 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">dicatto</h4>
                <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">Copyright &copy;  2019 - All rights reserved</p>
                <ul class="list-unstyled wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".6s">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div><!-- End Container -->
</footer><!-- /END FOOTER SECTION -->


	<!-- =========================
			SCRIPTS 
	============================== -->
    <!-- jQuery Library -->
    <!-- <script src="../../../../../code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/assets/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="<?php echo base_url(); ?>assets/js/assets/owl.carousel.min.js"></script>
    <!-- WOW Js -->
    <script src="<?php echo base_url(); ?>assets/js/assets/wow.min.js"></script>
    <!-- Sticky JS -->
    <script src="<?php echo base_url(); ?>assets/js/assets/jquery.sticky.js"></script>
    <!-- Smooth Scrool -->
    <script src="<?php echo base_url(); ?>assets/js/assets/smooth-scroll.js"></script>
    <!-- AjaxChimp JS -->
    <script src="<?php echo base_url(); ?>assets/js/assets/jquery.ajaxchimp.js"></script>
	<!-- Mail JS -->
	<script src="<?php echo base_url(); ?>assets/js/mail.js"></script>
    <!-- Color Switcher -->
    <script src="<?php echo base_url(); ?>assets/js/base.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/switcher.core.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/switcher.helper.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/switcher.load.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/function.js"></script>
	
    
    </body>

</html>


<style type="text/css">
   .count li {
  display: inline-block;
  font-size: 1.5em;
  list-style-type: none;
  padding: 1em;
  text-transform: uppercase;
}

.count li span {
  display: block;
  font-size: 4.5rem;
}
</style>

<script type="text/javascript">
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('April 6, 2019 00:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
      
      //do something later when date is reached
      //if (distance < 0) {
      //  clearInterval(x);
      //  'IT'S MY BIRTHDAY!;
      //}

    }, second)
</script>