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
@media only screen and (max-width: 600px) {
.ad-mobiles {
    left: 25%!important;
    width: 100%!important;
}}
@media only screen and (max-width: 600px) {
.aboutmo img{
width: 250px!important;
}}
</style>
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Dicatto</title>        
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/home/images/favicon.png">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/assets/bootstrap.css">
        
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/assets/font-awesome.min.css">
        
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/assets/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/assets/owl.transitions.css">
        
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/assets/animate.css">
        
        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Exo:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
     
        <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/assets/responsive.css">
        <script src="<?php echo base_url();?>assets/home/js/vendor/modernizr-3.3.1.min.js"></script>
        
        <!-- Color Switcher -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/switcher.core.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/switcher.helper.css">
        
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="js/assets/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
<!-- Preloader -->
<!-- <div id="preloader">
    <div id="status">&nbsp;</div>
</div> -->
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
          <a href="<?php echo base_url();?>">
                <img src="<?php echo base_url();?>assets/home/images/dicattologo.png" class="img-responsive logohome" alt="">
                </a>       
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="rx-navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a data-scroll href="#intro">Home</a></li>
            <li><a data-scroll href="#app-features">About Us</a></li>
            <li><a data-scroll href="#callCareer">Career</a></li>
            <li><a data-scroll href="#contact">Contact</a></li>
            <li><a data-scroll href="<?php echo base_url();?>Admin/register">Register</a></li>
          </ul>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <!-- =========================
            Intro 
        ========================== -->
    <section>
        <div class="container-fluid home-main" style="padding: 15px 0px 0px 0px;">
            
                <!-- <div class="col-md-12 featured-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s"> -->
                <img src="<?php echo base_url();?>assets/home/images/mainslider.png" class="img-responsive" alt="app-o2">
            
               
            
        </div>
    </section>

</header><!-- /END HEADER -->

<!-- =========================
    Pricing Plan
    ========================== -->
<section class="pricing-plan" >
    <div class="container">
        <div class="row">
            
            <div class="pricing-wrapper text-center">
                <div class="row">
                    <div class="col-sm-3 no-padding wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="description-images">
                        <img src="<?php echo base_url();?>assets/home/images/business.png">
                        </div>
                       <h4 class="description-titale">Digital Inclusiveness</h4>
                       <p>Attractive consumer centric services and deals</p>

                        
                    </div>
                    <div class="col-sm-3 no-padding wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="description-images">
                        <img class="descriptionimg text-center" src="<?php echo base_url();?>assets/home/images/consumer.png">
                        </div>
                       <h4 class="description-titale">Bottom-up approach</h4>
                       <p>Strong local seller and consumer network</p>
                    </div>
               
                  
                    <div class="col-sm-3 no-padding wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="description-images">
                        <img class="" src="<?php echo base_url();?>assets/home/images/gift.png">
                        </div>
                       <h4 class="description-titale">Options</h4>
                       <p>Giving preference to the consumer habits and shopping choices</p>
                    </div>

                     <div class="col-sm-3 no-padding wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="description-images">
                        <img src="<?php echo base_url();?>assets/home/images/customer.png">
                        </div>
                        <h4 class="description-titale">Sustainability</h4>
                        <p>Providing various retail products and digital services</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

   <section>
        <div class="container" style="padding-top: 25px;padding-bottom: 25px;">
            <div class="">
                <div class="col-md-12 featured-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                <img src="<?php echo base_url();?>assets/home/images/slider1.png" class="img-responsive" alt="app-o2">
             </div>
               
            </div>
        </div>
    </section>





<!-- =========================
        FEATURES
    ========================== -->

<!-- 
<section id="app-features">
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
            <div class="col-sm-5 col-sm-12  text-center">
              
                <div class="ad-frame-two wow fadeInLeft aboutmo" data-wow-duration="1.5s" data-wow-delay=".4s">
                    <img src="<?php echo base_url();?>assets/home/images/aboutimages.png" alt="">
                </div>
            </div>
            <div class="col-sm-7 col-sm-12">
                <div class="col-md-12 heading">
                    <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s" style="color: #fff;">About dicatto</h2>
                </div>
                <div class="col-md-12 app-description-content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <ul class="" style="font-size: 21px;line-height: 35px;color: #fff;">
                    <li>Digital ease with connectedness</li>
                    <li>Convenient modes of delivery</li>
                    <li>Attractive pricing</li>
                    <li>Direct benefits to sellers and buyers</li>
                    <li>Platform for physical products and digital services</li>
                    </ul>

                    <p class="about-text" style="color: #fff;">
                        dicatto is about digital empowerment to the general consumers. It aims attractive consumer-centric services and deals thereby bringing digital inclusiveness of general consumer. diactto promotes “bottom-up” approach of a strong local sellers and consumer network, thereby bringing sustainability in the ever-dynamic consumer market. At dicatto, we want to give value added service to our esteemed customers. We envision to grow as pan India company (by building up a sustainable ecosystem) in next few years.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing-plan">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Why dicatto?</h2>
            </div>
            <div class="row">

              <div class="col-sm-6 text-right whydis"> 
              <div class="box homebox1"> 
                <img src="<?php echo base_url();?>assets/home/images/growwithus.jpg" width="450" height="350">
                <div class="whytitale1 text-center">
                <h4>Grow with us</h4> 
                </div> 
                  <div class="overbox">
                    <div class="title overtext"> </div>
                    <div class="tagline overtext">Present Funding $10 million with 1 million customer base, roadmap to grow pan India in few years </div>
                  </div>
              </div>

              </div>

               <div class="col-sm-6 text-center whydis"> 
              <div class="box homebox2"> 
                <img src="<?php echo base_url();?>assets/home/images/ahead-of-the-competition.jpg"  width="450" height="350">
                <div class="whytitale2 text-center">
                <h4>Ahead of the competition</h4> 
                </div> 
                  <div class="overbox">
                    <div class="title overtext"> </div>
                    <div class="tagline overtext">Giving the best offers and multitude products to our customers  </div>
                  </div>
              </div>

              </div>

                </div>
            <div class="row dis-row">
              <div class="col-sm-6 text-center whydis"> 
              <div class="box homebox3"> 
                <img src="<?php echo base_url();?>assets/home/images/buying-preferences.jpg" width="450" height="350">
                <div class="whytital3 text-center">
                <h4>Buying Preferences</h4> 
                </div> 
                  <div class="overbox">
                    <div class="title overtext"> </div>
                    <div class="tagline overtext modif">Digital choices yet, physical touch </div>
                  </div>
              </div>

              </div>


               <div class="col-sm-6 text-center whydis"> 
              <div class="box homebox4"> 
                <img src="<?php echo base_url();?>assets/home/images/faster-logistic-services.jpg" width="450" height="350">
                <div class="whytital4 text-center">
                <h4>Faster Logistic Services</h4> 
                </div> 
                  <div class="overbox">
                    <div class="title overtext"> </div>
                    <div class="tagline overtext">Long and crisscrossed network of local sellers</div>
                  </div>
              </div>

              </div>

              </div>
                
            
            
        </div>
    </div>
    </div>
</section>

<section class="Team" id="callCareer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Career</h2>
            </div>
            <div class="col-sm-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <h3 class="text-center" style="padding-bottom: 18px;">Join Our Team</h3>
            </div>
            <div class="Career-dis text-left wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <p>We are bunch of young, energetic, creative and dynamic minded people. We are excited and enthused about what we do. We are passionate and focused about our goal.</p>
                <p>We are looking for excellent, dedicated people who are self-motivated about business development and relationship development roles.</p>
                <p>Our company is envisioned to grow exceptionally fast thereby, providing people associated to grow faster.</p>
                <p>We promise for excellent CTC and incentives.</p>
                <p><b>Positions available</b></p>
                <p><b>Customer Relationship Manager :</b> We are looking for people fluent in English for Customer Relationship Manager. Graduates can apply here. For job description and CTC email us.</p>
                <p><b>Business Development Managers :</b> We are looking for street-smart MBA graduates for the role of Business Development Manager. Graduates can apply here. For Job description and CTC email us.</p>
            </div>


            
        </div>
    </div>
</section>



<section class="contact1 text-center">
    <div class="container">
   <div class="col-md-12 heading" style="margin-bottom: 0px;">
                <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Coming Soon</h2>
               
            </div>
  <ul class="count wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
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
            <div class="col-sm-12 col-md-4 text-center wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                <img src="<?php echo base_url();?>assets/home/images/contact.png" width="120" class="fadeInUp">        
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
<!--                 <div id="form-messages"></div>
 -->            </div><!-- Ends Contact Form -->
        </div> 
    </div>
</section>


<!-- =========================
    Vendor Registration
    ========================== -->



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
                    <li><a href="https://www.facebook.com/dicatto-1177704499057460/"  target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/dicattoindia/" target="_blank"><i class="fa fa-instagram"></i></a></li>               
                    <li><a href="https://www.linkedin.com/company/dicatto/about/"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/dicatto1"  target="_blank"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div><!-- End Container -->
</footer><!-- /END FOOTER SECTION -->


    <!-- =========================
            SCRIPTS 
    ============================== -->
    <!-- jQuery Library -->
    <script src="<?php echo base_url();?>assets/home/js/vendor/code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/home/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/home/js/assets/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="<?php echo base_url();?>assets/home/js/assets/owl.carousel.min.js"></script>
    <!-- WOW Js -->
    <script src="<?php echo base_url();?>assets/home/js/assets/wow.min.js"></script>
    <!-- Sticky JS -->
    <script src="<?php echo base_url();?>assets/home/js/assets/jquery.sticky.js"></script>
    <!-- Smooth Scrool -->
    <script src="<?php echo base_url();?>assets/home/js/assets/smooth-scroll.js"></script>
    <!-- AjaxChimp JS -->
    <script src="<?php echo base_url();?>assets/home/js/assets/jquery.ajaxchimp.js"></script>
    <!-- Mail JS -->
    <script src="<?php echo base_url();?>assets/home/js/mail.js"></script>
    <!-- Color Switcher -->
    <script src="<?php echo base_url();?>assets/home/js/base.js"></script>
    <script src="<?php echo base_url();?>assets/home/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url();?>assets/home/js/switcher.core.js"></script>
    <script src="<?php echo base_url();?>assets/home/js/switcher.helper.js"></script>
    <script src="<?php echo base_url();?>assets/home/js/switcher.load.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo base_url();?>assets/home/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets/home/js/function.js"></script>
    
    
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