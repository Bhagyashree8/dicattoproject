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
    Contact Us
    ========================== -->
<?php if($this->session->flashdata('success')) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-right: 25px;"><span aria-hidden="true">&times;</span></button>
        <h5><?php echo $this->session->flashdata('success'); ?></h5>
    </div>
<?php }?>

<section class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Vendor Registration</h2>
            </div>
            <div class="col-sm-12 col-md-8 contact-form">
                <form class="form-group" method="POST" action="<?php echo base_url()."Vendor/registerVendors";?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <label> Owner Name: </label> <input type="text" placeholder="Owner Name" id="name" name="owner_name">
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <label> Firm Name: </label> <input type="text" placeholder="Firm Name" id="firm" name="firm_name">
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <label> Email: </label> <input type="email" placeholder="Email" id="email" name="email">
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <label> Contact: </label> <input type="text" placeholder="Contact" id="contact" name="contact">
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <label> Location: </label> <input type="text" placeholder="Location" id="location" name="location">
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <!-- <input type="email" placeholder="Email" id="email" name="email"> -->
                                <label> Firm Address: </label>
                                <textarea placeholder="Firm Address" id="firm_address" name="firm_address"></textarea>
                            </div>

                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <label> Adhar Card: </label>
                                <input type="file" placeholder="Adhar Card" id="uid_card" name="uid_card">
                                <!-- <input type="file" class="form-control" name="avatar"> -->
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                               <label> PAN Card: </label>
                                <input type="file" placeholder="PAN Card" id="pan_card" name="pan_card">
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                               <label> Firm PAN Card: </label>
                                <input type="file" placeholder="PAN Card" id="firm_pan_card" name="firm_pan_card">
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                               <label> GST Number: </label>
                                <input type="file" placeholder="GST Number" id="gst_card" name="gst_card">
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <label> Canceled Cheque: </label>
                                <input type="file" placeholder="Adhar Card" id="canceled_cheque" name="canceled_cheque">
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <label> Uploaded Picture: </label>
                                <input type="file" placeholder="Uploaded Picture:" id="uploaded_picture" name="uploaded_picture">
                            </div>

                            <div class="col-sm-12 form-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".9s">
                                <input type="checkbox" name="terms_conditions">
                                <input type="submit" value="Register"/>
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