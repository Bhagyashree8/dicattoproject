
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url();?>assets/images/favicon.png" alt="homepage" class="light-logo" height="30" width="30" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <!-- <img src="<?php echo base_url();?>assets/images/dicattologo.png" alt="homepage" class="dark-logo" height="70" width="200" /> -->
                         <!-- Light Logo text -->    
                         <a href="<?php echo site_url(); ?>"><img src="<?php echo base_url();?>assets/images/dicattologo.png" class="light-logo" alt="homepage" height="70" width="200" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="profileshow">
                    <!-- ============================================================== -->
                <div class="half">
    <label for="profile2" class="profile-dropdown">
      <input type="checkbox" id="profile2">
<!--       <img src="https://cdn0.iconfinder.com/data/icons/avatars-3/512/avatar_hipster_guy-512.png">
 -->      <span style="padding-top: 17px;"><?php echo isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser']->name : "NA"; ?></span>
      <label for="profile2"><i class="mdi mdi-menu"></i></label>
      <ul>
        <li><a href="<?php echo site_url()."Login/logout"; ?>"><i class="mdi mdi-logout"></i>Logout</a></li>
      </ul>
    </label>
  </div>
            </nav>
        </header>

    </div>
</body>

<style type="text/css">
.profileshow{
    right: 0px;
    position: absolute;
}

    .profile-dropdown {
  display: inline-block;
  position: relative;
  background: #060a18;
  margin: auto;
  font-weight: bold;
  font-size: 1.3rem;
  border-radius: 3px;
  -webkit-user-select: none;
  /* Chrome all / Safari all */
  -moz-user-select: none;
  /* Firefox all */
  -ms-user-select: none;
  /* IE 10+ */
  user-select: none;
  /* Likely future */
}
.profile-dropdown * {
  -webkit-user-select: none;
  /* Chrome all / Safari all */
  -moz-user-select: none;
  /* Firefox all */
  -ms-user-select: none;
  /* IE 10+ */
  user-select: none;
  /* Likely future */
}
.profile-dropdown input[type="checkbox"] {
  display: none;
}
.profile-dropdown input[type="checkbox"]:checked ~ ul {
  display: block;
  animation: pulse 0.5s;
}
.profile-dropdown input[type="checkbox"]:checked ~ img {
  background: #060a18;
}
.profile-dropdown input[type="checkbox"]:checked ~ label {
  background: #060a18;
}
.profile-dropdown input[type="checkbox"]:checked ~ label i {
  color: #f2f2f2;
}
.profile-dropdown input[type="checkbox"]:checked ~ label:after {
  content: '';
  position: absolute;
  top: 100%;
  right: calc(50% - 10px);
  display: block;
  border-style: solid;
  border-width: 7px 10px 0 10px;
  border-color: #060a18;
  width: 0;
  height: 0;
}
.profile-dropdown img {
  display: inline-block;
  background: #d9d9d9;
  height: 2.5rem;
  vertical-align: middle;
  margin-right: 1rem;
  margin: .5rem .75rem .5rem .5rem;
  border-radius: 50%;
}
.profile-dropdown span {
  display: inline-block;
    vertical-align: sub;
    width: 100px;
    margin-right: 0px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.profile-dropdown ul {
  display: none;
  list-style: none;
  padding: 0;
  marrgin: 0;
  background: #fff;
  position: absolute;
  top: 100%;
  right: 0;
  width: 100%;
  border-radius: 3px;
}
.profile-dropdown ul li a {
  display: block;
  padding: .75rem 1rem;
  text-decoration: none;
  color: #737373;
  font-size: 1rem;
}
.profile-dropdown ul li a i {
  font-size: 1.3rem;
  vertical-align: middle;
  margin: 0 .75rem 0 -.25rem;
}
.profile-dropdown ul li a:hover {
  background: #e5e5e5;
}
.profile-dropdown ul li:first-child a:hover {
  border-radius: 3px 3px 0 0;
}
.profile-dropdown ul li:last-child a:hover {
  border-radius: 0 0 3px 3px;
}
.profile-dropdown > label {
  position: relative;
  height: 3.5rem;
  display: block;
  text-decoration: none;
  background: transparent;
  color: #333;
  box-sizing: border-box;
  padding: .9rem;
  float: right;
  border-radius: 0 3px 3px 0;
}
.profile-dropdown > label i {
  color: #b2b2b2;
  font-size: 1.75rem;
}
.profile-dropdown:after {
  content: '';
  display: table;
  clear: both;
}






</style>