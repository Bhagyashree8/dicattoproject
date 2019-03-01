<?php include ('header.php');?>
<!DOCTYPE html>
<html lang="en">


<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
      <div class="lds-roller">
      <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
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
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/logo-light-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
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
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-Bell"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated fadeIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Launch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Mason Hudson</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-Mail"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right animated fadeIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mason Hudson</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pepper Hensen</h5> <span class="mail-desc">Neque porro quisquam est!</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Steve Carter</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mason Hudson</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-Box-Close"></i></a>
                            <div class="dropdown-menu animated fadeIn">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 mb-30">
                                        <h4 class="mb-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="../assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 mb-30">
                                        <h4 class="mb-20">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Collapsible Group Item #1
                                                </a>
                                              </h5> </div>
                                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Collapsible Group Item #2
                                                </a>
                                              </h5> </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  Collapsible Group Item #3
                                                </a>
                                              </h5> </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  mb-30">
                                        <h4 class="mb-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 mb-30">
                                        <h4 class="mb-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu dropdown-menu-right animated fadeIn"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="" /> <span class="hidden-md-down">Mark Sanders &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated fadeIn">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Winston June</h4>
                                                <p class="text-muted">michelle@gmail.com</p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
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
                        <li class="nav-small-cap">MAIN</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-apps mr-10"></i><span class="hide-menu">Dashboard <span class="label label-rounded label-danger">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.html">Dashboard V1</a></li>
                                <li><a href="http://creativethemes.co.in/demo/studioux/hyrax-admin-bootstrap4/dark/index.html">Dashboard V2</a></li>

                                <li><a href="http://creativethemes.co.in/demo/studioux/hyrax-admin-bootstrap4/horizontal/index.html">Dashboard V3</a></li>

                                <li><a href="http://creativethemes.co.in/demo/studioux/hyrax-admin-bootstrap4/mini-sidebar/index.html">Dashboard V4</a></li>
<li><a href="index-stock.html">Dashboard V5</a></li>
<li><a href="http://creativethemes.co.in/demo/studioux/hyrax-admin-bootstrap4/rtl/index.html">Dashboard V6</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-settings-variant mr-10"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-calendar.html">Calendar</a></li>
                                <li><a href="app-contact.html">Contact / Employee</a></li>
<li><a href="app-chat.html">Chat app</a></li>
 <li><a href="app-contact2.html">Contact Grid</a></li>
                                <li><a href="app-ticket.html">Support Ticket</a></li>
                                <li><a href="app-contact-detail.html">Contact Detail</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email mr-10"></i><span class="hide-menu">Inbox</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-email.html">Mailbox</a></li>
                                <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                <li><a href="app-compose.html">Compose Mail</a></li>
                            </ul>
                        </li>
                         <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bar mr-10"></i><span class="hide-menu">Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-morris.html">Morris Chart</a></li>
                                <li><a href="chart-chartist.html">Chartis Chart</a></li>
                                <li><a href="chart-echart.html">Echarts</a></li>
                                <li><a href="chart-flot.html">Flot Chart</a></li>
                                <li><a href="chart-knob.html">Knob Chart</a></li>
                                <li><a href="chart-chart-js.html">Chartjs</a></li>
                                <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                <li><a href="chart-extra-chart.html">Extra chart</a></li>
                                <li><a href="chart-peity.html">Peity Charts</a></li>
                            </ul>
                        </li>
                        
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-compass mr-10"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="map-google.html">Google Maps</a></li>
                                <li><a href="map-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrange-bring-forward mr-10"></i><span class="hide-menu">Ui Elements <span class="label label-rounded label-success">25</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-user-card.html">User Cards</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-tab.html">Tab</a></li>
                                <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                                <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                                <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                                <li><a href="ui-notification.html">Notification</a></li>
                                <li><a href="ui-progressbar.html">Progressbar</a></li>
                                <li><a href="ui-nestable.html">Nestable</a></li>
                                <li><a href="ui-range-slider.html">Range slider</a></li>
                                <li><a href="ui-timeline.html">Timeline</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                                <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                                <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                                <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                                <li><a href="ui-list-media.html">List Media</a></li>
                                <li><a href="ui-ribbons.html">Ribbons</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                                <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-document-box mr-10"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.html">Basic Forms</a></li>
                                <li><a href="form-layout.html">Form Layouts</a></li>
                                <li><a href="form-addons.html">Form Addons</a></li>
                                <li><a href="form-material.html">Form Material</a></li>
                                <li><a href="form-float-input.html">Floating Label</a></li>
                                <li><a href="form-pickers.html">Form Pickers</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-dropzone.html">File Dropzone</a></li>
                                <li><a href="form-icheck.html">Icheck control</a></li>
                                <li><a href="form-img-cropper.html">Image Cropper</a></li>
                                <li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
                                <li><a href="form-typehead.html">Form Typehead</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-xeditable.html">Xeditable Editor</a></li>
                                <li><a href="form-summernote.html">Summernote Editor</a></li>
                                <li><a href="form-tinymce.html">Tinymce Editor</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chemical-weapon mr-10"></i><span class="hide-menu">Icons</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-iconmind.html">Mind Icons</a></li>
                                <li><a href="icon-simple-lineicon.html">Simple Line icons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                            </ul>
                        </li>
                        
                            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-border-all mr-10"></i><span class="hide-menu">Tables</span></a>
                        <ul aria-expanded="false" class="collapse">
                                <li><a href="table-basic.html">Basic Tables</a></li>
                                <li><a href="table-layout.html">Table Layouts</a></li>
                                <li><a href="table-data-table.html">Data Tables</a></li>
                                <li><a href="table-footable.html">Footable</a></li>
                                <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                                <li><a href="table-responsive.html">Responsive Table</a></li>
                                <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
                                <li><a href="table-editable-table.html">Editable Table</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-clipboard-text mr-10"></i><span class="hide-menu">Widgets</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="widget-data.html">Data Widgets</a></li>
                                <li><a href="widget-apps.html">Apps Widgets</a></li>
                                <li><a href="widget-charts.html">Charts Widgets</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">OTHER PAGES</li>
<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-cart mr-10"></i><span class="hide-menu">Ecommerce</span></a>
<ul aria-expanded="false" class="collapse">
                <li><a href="ecommerce-dashboard.html">Dashboard</a></li>
                <li><a href="ecommerce-pro-list.html">Product List</a></li>
                <li><a href="ecommerce-add-new.html">Add new product</a></li>
                <li><a href="ecommerce-orders.html">Orders</a></li>
                <li><a href="ecommerce-invoice.html">Invoice</a></li>
                <li><a href="ecommerce-customers.html">Customers</a></li>
              </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-document mr-10"></i><span class="hide-menu">Page Layout</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="layout-single-column.html">1 Column</a></li>
                                <li><a href="layout-fix-header.html">Fix header</a></li>
                                <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
                                <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
                                <li><a href="layout-boxed.html">Boxed Layout</a></li>
                                <li><a href="layout-logo-center.html">Logo in Center</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-multiple mr-10"></i><span class="hide-menu">Sample Pages <span class="label label-rounded label-info">25</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="starter-kit.html">Starter Kit</a></li>
                                <li><a href="pages-blank.html">Blank page</a></li>
                                <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success pull-right">6</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-login.html">Login 1</a></li>
                                        <li><a href="pages-login-2.html">Login 2</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-register2.html">Register 2</a></li>
                                        <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                        <li><a href="pages-recover-password.html">Recover password</a></li>
                                    </ul>
                                </li>
                                <li><a href="pages-profile.html">Profile page</a></li>
                                <li><a href="pages-animation.html">Animation</a></li>
                                <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                                <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                                
                                <li><a href="pages-treeview.html">Treeview</a></li>
                                <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                                <li><a href="pages-search-result.html">Search result</a></li>
                                <li><a href="pages-scroll.html">Scrollbar</a></li>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                                <li><a href="pages-gallery.html">Gallery</a></li>
                                <li><a href="pages-faq.html">Faqs</a></li>
                                <li><a href="#" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-error-400.html">400</a></li>
                                        <li><a href="pages-error-403.html">403</a></li>
                                        <li><a href="pages-error-404.html">404</a></li>
                                        <li><a href="pages-error-500.html">500</a></li>
                                        <li><a href="pages-error-503.html">503</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-format-line-spacing mr-10"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                        <li><a href="#">item 1.3.2</a></li>
                                        <li><a href="#">item 1.3.3</a></li>
                                        <li><a href="#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li>
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
                        <h3 class="text-themecolor">Footable</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Footable</li>
                        </ol>
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
                                <h4 class="card-title">Contact Emplyee list</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table mt-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th>Age</th>
                                                <th>Joining date</th>
                                                <th>Salery</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Mason Hudson</a>
                                                </td>
                                                <td>mason@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user" width="40" class="img-circle" /> Cameron Klein</a>
                                                </td>
                                                <td>cameron@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user" width="40" class="img-circle" /> Liliput Saldana</a>
                                                </td>
                                                <td>Liliput@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>28</td>
                                                <td>1-10-2013</td>
                                                <td>$2200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user" width="40" class="img-circle" /> Pepper Hensen</a>
                                                </td>
                                                <td>Tiffany@gmail.com</td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>25</td>
                                                <td>2-10-2018</td>
                                                <td>$200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user" width="40" class="img-circle" /> Christie Saldana</a>
                                                </td>
                                                <td>john@gmail.com</td>
                                                <td>+567 456 789</td>
                                                <td><span class="label label-danger">Manager</span></td>
                                                <td>23</td>
                                                <td>10-9-2015</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user" width="40" class="img-circle" /> Scott Lang</a>
                                                </td>
                                                <td>scott@gmail.com</td>
                                                <td>+678 456 789</td>
                                                <td><span class="label label-warning">Chairman</span></td>
                                                <td>29</td>
                                                <td>10-5-2013</td>
                                                <td>$1500</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user" width="40" class="img-circle" /> Logan Wong</a>
                                                </td>
                                                <td>stephen@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span></td>
                                                <td>35</td>
                                                <td>05-10-2012</td>
                                                <td>$3200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user" width="40" class="img-circle" /> Sam Wilson</a>
                                                </td>
                                                <td>sam@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span></td>
                                                <td>27</td>
                                                <td>11-10-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user" width="40" class="img-circle" /> Liliput Saldana</a>
                                                </td>
                                                <td>Liliput@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>18</td>
                                                <td>12-5-2018</td>
                                                <td>$100</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Pepper Hensen</a>
                                                </td>
                                                <td>quill@gmail.com</td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>36</td>
                                                <td>18-5-2009</td>
                                                <td>$4200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user" width="40" class="img-circle" /> michelle Dhawan</a>
                                                </td>
                                                <td>michelle@gmail.com</td>
                                                <td>+567 456 789</td>
                                                <td><span class="label label-danger">Manager</span></td>
                                                <td>43</td>
                                                <td>12-10-2010</td>
                                                <td>$5200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user" width="40" class="img-circle" /> Mason Hudson</a>
                                                </td>
                                                <td>mason@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user" width="40" class="img-circle" /> Cameron Klein</a>
                                                </td>
                                                <td>cameron@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user" width="40" class="img-circle" /> Liliput Saldana</a>
                                                </td>
                                                <td>Liliput@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>28</td>
                                                <td>1-10-2013</td>
                                                <td>$2200</td>
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
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Row Toggler</h4>
                                <h6 class="card-subtitle">Create your table with Toggle Footable</h6>
                                <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true"> First Name </th>
                                            <th> Last Name </th>
                                            <th data-hide="phone"> Job Title </th>
                                            <th data-hide="all"> DOB </th>
                                            <th data-hide="all"> Status </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ibiza</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Ibiza</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Ibiza</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Accordion Footable</h4>
                                <h6 class="card-subtitle">Create your table with Accordion Footable</h6>
                                <table id="demo-foo-accordion" class="table mb-0 toggle-arrow-tiny">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true"> First Name </th>
                                            <th> Last Name </th>
                                            <th data-hide="phone"> Job Title </th>
                                            <th data-hide="all"> DOB </th>
                                            <th data-hide="all"> Status </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ibiza</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Ibiza</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Ibiza</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pagination Footable</h4>
                                <h6 class="card-subtitle">Create your table with Paginated Footable</h6>
                                <label class="form-inline">Show &nbsp;
                                    <select id="demo-show-entries">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select> &nbsp; entries </label>
                                <table id="demo-foo-pagination" class="table mb-0 toggle-arrow-tiny" data-page-size="5">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true"> First Name </th>
                                            <th> Last Name </th>
                                            <th data-hide="phone"> Job Title </th>
                                            <th data-hide="all"> DOB </th>
                                            <th data-hide="all"> Status </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ibiza</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Ibiza</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Ibiza</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a></td>
                                            <td><a href="#">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split mt-30"> </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add & Remove Rows</h4>
                                <h6 class="card-subtitle">You can add or remove rows with Footable</h6>
                                <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                                    <thead>
                                        <tr>
                                            <th data-sort-initial="true" data-toggle="true">First Name</th>
                                            <th>Last Name</th>
                                            <th data-hide="phone, tablet">Job Title</th>
                                            <th data-hide="phone, tablet">DOB</th>
                                            <th data-hide="phone, tablet">Status</th>
                                            <th data-sort-ignore="true" class="min-width">Delete</th>
                                        </tr>
                                    </thead>
                                    <div class="mt-40">
                                        <div class="d-flex">
                                            <div class="mr-auto">
                                                <div class="form-group">
                                                    <button id="demo-btn-addrow" class="btn btn-primary btn-sm"><i class="icon wb-plus" aria-hidden="true"></i>Add New Row
                                                    </button>
                                                    <small>New row will be added in last page.</small> </div>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="form-group">
                                                    <input id="demo-input-search2" type="text" placeholder="Search" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <tbody>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 2017</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td>Goodlow</td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 2014</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ibiza</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 2014</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Doris</td>
                                            <td>Michael</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 2013</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 2014</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 2017</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 2014</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 2013</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 2013</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 2014</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 2017</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 2014</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 2013</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 2013</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 2014</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 2014</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 2017</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maria</td>
                                            <td>Tangeli</td>
                                            <td>Drywall Stripper</td>
                                            <td>21 May 2014</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 2017</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 2014</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 2017</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6">
                                                <div class="text-right">
                                                    <ul class="pagination">
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
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


<!-- Mirrored from creativethemes.co.in/demo/studioux/hyrax-admin-bootstrap4/main/table-footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 08:02:36 GMT -->
</html>