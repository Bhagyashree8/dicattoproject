<?php include ('header.php');?>
<!DOCTYPE html>
<html lang="en">

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url();?>/assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url();?>/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url();?>/assets/images/logo-light-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url();?>/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="icon-Magnifi-Glass2"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                   
                        
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li><a href="vederliest">Vender</a></li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
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
                        <h3 class="text-themecolor">Vender</h3>
                     
                    </div>
                    
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Vender list</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table mt-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>Owner Name</th>
                                                <th>Firm Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Location</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mason Hudson</td>
                                                <!-- <td>
                                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>/assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Mason Hudson</a>
                                                </td> -->
                                                <td>Mason Hudson</td>
                                                <td>mason@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td>mumbai</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mason Hudson</td>
                                                <!-- <td>
                                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>/assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Mason Hudson</a>
                                                </td> -->
                                                <td>Mason Hudson</td>
                                                <td>mason@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td>mumbai</td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Contact</button>
                                                </td>
                                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="modal-title" id="myModalLabel">Add New Contact</h4> </div>
                                                            <div class="modal-body">
                                                                <from class="form-horizontal form-material">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 mb-20">
                                                                            <input type="text" class="form-control" placeholder="Type name"> </div>
                                                                        <div class="col-md-12 mb-20">
                                                                            <input type="text" class="form-control" placeholder="Email"> </div>
                                                                        <div class="col-md-12 mb-20">
                                                                            <input type="text" class="form-control" placeholder="Phone"> </div>
                                                                        <div class="col-md-12 mb-20">
                                                                            <input type="text" class="form-control" placeholder="Designation"> </div>
                                                                        <div class="col-md-12 mb-20">
                                                                            <input type="text" class="form-control" placeholder="Age"> </div>
                                                                        <div class="col-md-12 mb-20">
                                                                            <input type="text" class="form-control" placeholder="Date of joining"> </div>
                                                                        <div class="col-md-12 mb-20">
                                                                            <input type="text" class="form-control" placeholder="Salary"> </div>
                                                                        <div class="col-md-12 mb-20">
                                                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload mr-5"></i>Upload Contact Image</span>
                                                                                <input type="file" class="upload"> </div>
                                                                        </div>
                                                                    </div>
                                                                </from>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="mt-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block mt-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 Hyrax UX Admin Template by SRGIT </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
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
    <script src="../assets/vendors/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="../assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/vendors/ps/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- Footable -->
    <script src="../assets/vendors/footable/js/footable.all.min.js"></script>
    <!--FooTable init-->
    <script src="js/footable-init.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>