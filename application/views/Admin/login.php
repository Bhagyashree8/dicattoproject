<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>/assets/images/favicon.png">

    <title>dicatto</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="<?php echo base_url();?>main/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>main/css/master-stylesheet.css" rel="stylesheet">
    
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url();?>main/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 

</head>

<body class="card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
  
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
   

    <section id="wrapper">
        <?php 
            if(isset($_SESSION["error"])) {
                ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-right: 25px;"><span aria-hidden="true">&times;</span></button>
                        <h5><?php echo $this->session->flashdata('error'); ?></h5>
                       </div>
                <?php
            }
        ?>
        <div class="login-register" style="background-image:url(<?php echo base_url();?>/assets/images/background/login-register.jpg);">
        <!--     <div class="logo-page" style="text-align: center;padding-bottom: 10px;"> <img src="<?php echo base_url();?>/assets/images/logo2.png">    </div> -->

            <div class="login-box card">

                <div class="card-body">
                        <center><h3 class="box-title mb-20">Sign In</h3></center>
                        <center>
                            <a href="<?php echo base_url();?>">
                            <img src="<?php echo base_url();?>assets/home/images/dicattologo.png" class="img-responsive logohome" alt="">
                            </a>
                        </center>
                        <form action="<?php echo base_url()."Login/loginPost";?>" method="POST" class="form-group">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" name="email" placeholder="username"> </div>
                                <strong style="color:red; "> <?php echo form_error('email'); ?></strong>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" name="password" placeholder="password"> </div>
                                <strong style="color:red; "> <?php echo form_error('password'); ?></strong>
                        </div>
                        <div class="form-group row">
<!--
                            <div class="col-md-12">
                                <div class="checkbox checkbox-info pull-left pt-0">
                                    <input id="checkbox-signup" type="checkbox" class="filled-in chk-col-light-blue">
                                    <label for="checkbox-signup"> Remember me </label>
                                </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock mr-5"></i> Forgot pwd?</a> </div>
-->
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 pb-20">
                                <input class="btn btn-block btn-lg btn-primary btn-rounded" type="submit" value="Log In" />
                            </div>
                        </div>
                    </form>

                        <div class="row">
                            <!-- <div class="col-xs-12 col-sm-12 col-md-12 mt-10 text-center">
                                <div class="social">
                                    <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                    <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    </div>
            
            
        </div>
        </div>
    </section>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>/assets/vendors/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    
</body>


</html>