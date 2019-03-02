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
                <img src="<?php echo base_url();?>assets/home/images/dicattologo.png" class="img-responsive logohome" alt="">       
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="rx-navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a data-scroll href="#intro">Home</a></li>
            <li><a data-scroll href="#app-features">About Us</a></li>
            <li><a data-scroll href="#callCareer">Career</a></li>
            <li><a data-scroll href="#contact">Contact</a></li>
            <li><a data-scroll href="register">Register User</a></li>


            

          </ul>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- =========================
            Intro 
        ========================== -->
    

</header><!-- /END HEADER -->

<!-- =========================
    Pricing Plan
    ========================== -->
    <body>
        <section class="pricing-plan">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">Register User</h2>
            </div>
            <div class="row">

               <div class="col-lg-12">
              <div class="elements-title mb-30">
                    <!--  <div class="header" id="dis">

                        <h4 class="title pricingbox text-center"></h4>
                    </div>  -->
                <div class="card">
                    <div class="content">
                   
                          <div class="row" > 
                             <div class="col-md-3">
                                <div class="form-group">
                                <label>Date</label><span class="required" style="color:red;"> * </span>
                                    <input type="date"  max="2999-12-31" name="date" class="form-control border-input datepicker" placeholder="Date" value="<?php echo date('Y-m-d');?>" required>
                                
                                </div>
                            </div>
                        </div>
                        <div class="row" >                        
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Name</label><span class="required" style="color:red;"> * </span>
                                    <input type="text" class="form-control border-input" placeholder="Name" name="name" value="" required>
                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>SurName</label><span class="required" style="color:red;"> * </span>
                                    <input type="text" class="form-control border-input" placeholder="SurName" name="mothername" value="" required>
                                
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Father Name</label><span class="required" style="color:red;"> * </span>
                                    <input type="text" class="form-control border-input" placeholder="Father Name" name="fathername" value="" required>
                                
                                </div>
                            </div>
                        
                        </div>
                        <div class="row" >                        
                            <div class="col-md-12">
                                <div class="form-group">
                                <label>Full Address</label><span class="required" style="color:red;"> * </span>
                                  <textarea rows=2 class="form-control border-input UserName_field" placeholder="Home Address" name="address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row" >                        
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Pincode</label><span class="required" style="color:red;"> * </span>
                                    <input type="text" class="form-control border-input phoneInput" placeholder="Pincode" name="pincode" value="" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Pan No.</label><span class="required" style="color:red;"> * </span>
                                    <input type="text" class="form-control border-input txtuppercase" maxlength="10" minlength="10" placeholder="Pan number" name="pan" value="" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Email</label><span class="required" style="color:red;"> * </span>
                                    <input type="email" class="form-control border-input" placeholder="Email" name="Email" value="" required>
                                
                                </div>
                            </div>
                    
                        </div>
                        <div class="row" >                        
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Contact No.</label><span class="required" style="color:red;"> * </span>
                                    <input type="text" class="form-control border-input phoneInput" maxlength="10" minlength="10" placeholder="Mobile" name="contact" value="" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Alt Contact No.</label><span class="required" style="color:red;"> * </span>
                                    <input type="text" class="form-control border-input phoneInput" maxlength="10" minlength="10" placeholder="Mobile" name="altcontact" value="" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Date of birth</label><span class="required" style="color:red;"> * </span>
                                    <input type="date"  max="2999-12-31" name="dob" class="form-control border-input datepicker" placeholder="Date of birth" value="<?php echo date('Y-m-d');?>" required>
                                
                                </div>
                            </div>
                    
                        </div>
                       <div class="row" >
                          <div class="col-md-4">
                                <div class="form-group">
                                <label>Account number</label><span class="required" style="color:red;"> * </span>
                                    <input type="text" name="Account" class="form-control border-input" placeholder="Account no." value="" required>
                                </div>
                          </div>
                         <div class="col-md-4">
                                <div class="form-group">
                                <label>IFSC Code</label><span class="required" style="color:red;"> * </span>
                                    <input type="text" name="IFSC" class="form-control border-input" placeholder="IFSC Code" value="" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Bank Name</label><span class="required" style="color:red;"> * </span>
                                    <input type="text" name="Bank" class="form-control border-input" placeholder="Bank name" value="" required>
                                </div>
                            </div>
                        </div>
                
                         <div class="row" >                        
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label>Agent Name <span class="required" style="color:red;"> * </span></label>
                                    <select  class="form-control border-input" name="agent" id="agent" required>
                                        <option value="">--Select Agent--</option>
                                        <?php foreach($agent as $value):?>
                                        <option value="<?php echo $value->ID;?>"><?php echo $value->Name;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                <label>Agent ReferenceId</label><span class="required" style="color:red;"> * </span>
                                    <input type="text" name="reference" id="reference" class="form-control border-input" placeholder="Reference Id" value="" readonly required>
                                </div>
                            </div>
                        </div>
            
                  <div class="row" >                        
                         <div class="col-md-6">
                                <div class="form-group">
                                <label>Username</label><span class="required" style="color:red;"> * </span>
                                    <input type="text" name="username" class="form-control border-input" id="user" onkeyup="Uniquser();" placeholder="Username" value="" required>
                                    <span id="UserStatus"></span>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                <label>Password</label><span class="required" style="color:red;"> * </span>
                                    <input type="password" name="password" class="form-control border-input" placeholder="Password" value="" required>
                                </div>
                            </div>
                        </div>
                      <div class="row" > 
                        <div class="col-md-6">
                                <div class="form-group">
                                <label>Photo</label>
                                    <input type="file" class="form-control border-input" placeholder="file" name="avatar" value="" >
                                
                                </div>
                            </div>
                        </div>  
                                                                         
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd" name="addDb" id="btnLogin">Submit</button>
                        </div>
                        <div class="clearfix"></div>
           
                   </div>
                </div>
                        
            </div>
     </div>
   
        
                </div>
                </div>
            </div>
        </section>
    </body>




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
<style type="text/css">
    .pricing-plan .heading{
        margin-bottom:0px;
    }
</style>