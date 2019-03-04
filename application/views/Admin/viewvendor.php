<?php include ('header.php');?>
<?php include ('nav.php');?>
<?php include ('sidebar.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/dropify/dist/css/dropify.min.css">

</head>


<body class="fix-header card-no-border fix-sidebar">
    
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">View Vendor</h3>
                     
                    </div>
                   
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               
<div class="row">
          <!-- Column -->
          <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-body">
                
                <div class="row">
                  <!-- End of product slider -->
                  <div class="col-lg-12 col-md-12">
                    <div class="row">
                      <div class="form-wrap form-wrap2 col-12 mt-4">
                        <form class="form-horizontal form-group" method="POST" action="<?php echo base_url()."Vendor/updateVendor";?>" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?php echo $vendor->user_id; ?>">
                          <div class="col-sm-12 col-xs-12">
                            <div class="form-group">
                              <label class="control-label text-primary font-12">Owner Name</label>
                              <div>
                                <input type="text" class="form-control font-14"  placeholder="Owner Name" value="<?php echo $vendor->owner_name; ?>" name="owner_name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label text-primary font-12">Firm Name</label>
                              <div>
                                <input type="text" class="form-control font-14"  placeholder="Firm Name" value="<?php echo $vendor->firm_name; ?>" name="firm_name">
                              </div>
                            </div>
                          </div>
                          
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="row m-0">
                              <div class="col-md-6 col-xs-12">
                                <label class="control-label">Mobile Number</label>
                                <div>
                                  <input type="text" class="form-control font-14"  placeholder="Mobile Number" value="<?php echo $vendor->mobile; ?>" name="contact">
                                </div>
                              </div>

                              <div class="col-md-6 col-xs-12">
                                <label class="control-label font-14">Email Id</label>
                                <div>
                                  <input type="Email" class="form-control font-14"  placeholder="Email Id" value="<?php echo $vendor->email; ?>" name="email"> 
                                </div>
                              </div>
                            </div>
                            </div>  
                              
                                
                                  <div class="form-group">
                                     <div class="row m-0">
                                    <div class="col-sm-6 col-xs-6">
                                    <label class="control-label text-primary font-12">Location</label>
                                    <div>
                                      <input type="text" class="form-control font-14" placeholder="Location" value="<?php echo $vendor->location; ?>" name="location">
                                    </div>
                                  </div>
                                
                                    <div class="col-sm-6 col-xs-6">
                                    <label class="control-label text-primary font-12">Password</label>
                                    <div>
                                      <!-- <input type="text" class="form-control font-14" placeholder="Password" value="<?php echo $vendor->password; ?>" name="password"> -->
                                      <label><?php echo $vendor->password_string ?? "NA"; ?></label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            
                          
                          <div class="form-group">
                            <div class="row m-0">
                          <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Firm Address</h4>
                                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo file_exists($vendor->firm_address_img) ? base_url().$vendor->firm_address_img : ""; ?>" name="firm_address" />
                                </div>
                            </div>
                          </div>
                          
                          <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Aadhar Card</h4>
                                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo file_exists($vendor->uid_card) ? base_url().$vendor->uid_card : ""; ?>" name="uid_card"/>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">GST Number</h4>
                                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo file_exists($vendor->gst_card) ? base_url().$vendor->gst_card : ""; ?>" name="gst_card"/>
                                </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="row m-0">
                          <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Pan Number</h4>
                                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo file_exists($vendor->pan_card) ? base_url().$vendor->pan_card : ""; ?>" name="pan_card"/>
                                </div>
                            </div>
                          </div>
                          
                          <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Firm Pan Number</h4>
                                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo file_exists($vendor->firm_pan_card) ? base_url().$vendor->firm_pan_card : ""; ?>" name="firm_pan_card"/>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Cancelled Cheque</h4>
                                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo file_exists($vendor->canceled_cheque) ? base_url().$vendor->canceled_cheque : ""; ?>" name="canceled_cheque" />
                                </div>
                            </div>
                          </div>
                          </div>
                        </div>
                         <div class="form-group">
                            <div class="row m-0">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Upload Picture</h4>
                                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo file_exists($vendor->uploaded_picture) ? base_url().$vendor->uploaded_picture : ""; ?>" name="uploaded_picture" />
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>

                        
                        <!--   <div class="col-lg-4 col-md-4">
                    <div class="relative">
                      <div id="amazingslider-wrapper-1" class="mb-40">
                        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                          <ul class="amazingslider-slides" style="display:none;">
                            <li><a href="../assets/images/gallery/a-lightbox.jpg" class="html5lightbox"><img src="../assets/images/gallery/a.jpg" alt="" title="" /></a> </li>
                            
                          </ul>
                          
                        </div>
                      </div>
                    </div>
                    <div class="upload-photo">
                      <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="" />
                    </div>
                  </div> -->
                         
                          
                          <div class="form-group bt-switch row">
                            <div class="col-md-6 pl-30">
                              <div class="">
                                 
                              </div>
                            </div>
                            <div class="col-md-6 text-right pr-30">
                              <div class="5">
                                <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>
                                <button type="button" class="btn waves-effect waves-light btn-outline-default">Cancel</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
         
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/vendors/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>
  
  <script src="<?php echo base_url();?>assets/vendors/product-slider/product-slider.js"></script>
<script src="<?php echo base_url();?>assets/vendors/product-slider/product-slider.init.js"></script>
<script src="<?php echo base_url();?>assets/vendors/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
 <script src="<?php echo base_url();?>assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
 
 <script src="<?php echo base_url();?>assets/vendors/bootstrap-switch/bootstrap-switch.min.js"></script>
    <script type="text/javascript">
    $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
    var radioswitch = function() {
        var bt = function() {
            $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioState")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
            })
        };
        return {
            init: function() {
                bt()
            }
        }
    }();
    $(function() {
        radioswitch.init()
    });
    </script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>assets/vendors/ps/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>main/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>main/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url();?>assets/vendors/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>main/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>