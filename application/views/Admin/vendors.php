<?php include ('header.php');?>
<?php include ('nav.php');?>
<?php include ('sidebar.php');?>
<!DOCTYPE html>
<html lang="en">




    
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
                        <h3 class="text-themecolor">Vendor</h3>
                     
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
                                <h4 class="card-title">vendor list</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id=""  class="table mt-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                 <th>No</th>
                                                <th>Owner Name</th>
                                                <th>Firm Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Location</th>
                                                <th class="">Action</th>
                                                <th class="">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mason Hudson</td>
                                                <!-- <td>
                                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>/assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Mason Hudson</a>
                                                </td> -->
                                                <td>Mason Hudson</td>
                                                <td>mason@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td>mumbai</td>

                                                <td class="text-center"><a href="#"><i class="fa fa-pencil text-primary"></i></a></td>
                                                <td class="text-center"><a href="#"><i class="fa fa-trash text-danger text-danger"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Mason Hudson</td>
                                                <!-- <td>
                                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>/assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Mason Hudson</a>
                                                </td> -->
                                                <td>Mason Hudson</td>
                                                <td>mason@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td>mumbai</td>

                                                <td class="text-center"><a href="#"><i class="fa fa-pencil text-primary"></i></a></td>
                                                <td class="text-center"><a href="#"><i class="fa fa-trash text-danger text-danger"></i></a></td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              
                                                
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
             

</body>

</html>


<!-- <script type="text/javascript">
    $(function() {
        $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        
    });
  
</script> -->

    
  <script src="<?php echo base_url();?>assets/vendors/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    
    
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>assets/vendors/ps/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>main/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>main/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>/main/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?php echo base_url();?>assets/vendors/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="<?php echo base_url();?>assets/vendors/d3/d3.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/c3-master/c3.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?php echo base_url();?>assets/vendors/toast-master/js/jquery.toast.js"></script>
    

    <!--Sparkline JavaScript -->
    <script src="<?php echo base_url();?>assets/vendors/sparkline/jquery.sparkline.min.js"></script>

    
    <!-- Chart JS -->
    <script src="<?php echo base_url();?>main/js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/vendors/styleswitcher/jQuery.style.switcher.js"></script>