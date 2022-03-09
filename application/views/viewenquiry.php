
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                     
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                                <!-- <div>
                                    <button type="button" class="btn btn-success btn-lg" style="margin-left: 900px;">UPDATE</button>
                                    </div> -->
                                <!-- <h5 class="card-title">Full Width</h5> -->
                                <form class="forms-sample">
                                    <div class="form-group">
                                    <?php
                $i=1;
                foreach($Viewoneenquiry->result_array() as $row)
                    {
                        //$userWithoutHoroscopeID=$row['userWithoutHoroscopeID'];
                        $referenceId=$row['referenceId'];
                        //$MaledateOfBirth=$row['MaledateOfBirth'];
                        //$MaletimeOfBirth=$row['MaletimeOfBirth'];
                        //$Malestar=$row['Malestar'];
                        //$Maleplace=$row['Maleplace'];
                        $systemTime=$row['systemTime'];
                        $inquiryPaidDateTime=$row['inquiryPaidDateTime'];
                        $contact=$row['contact'];

                        //$femaledateOfBirth=$row['femaledateOfBirth'];
                        //$femaletimeOfBirth=$row['femaletimeOfBirth'];
                        //$femalestar=$row['femalestar'];
                        //$femaleplace=$row['femaleplace'];

                        $remark=$row['remark'];

                       // $datetime = date("d-m-Y h:m:s A", strtotime($inquiryPaidDateTime));
                        
                        
                        $date=date_create($inquiryPaidDateTime,timezone_open("America/Los_Angeles"));
                                                //echo date_format($date,"Y-m-d H:i:sP")."<br>";

                        date_timezone_set($date,timezone_open("Asia/Kolkata"));
                        $indiatime = date_format($date,"Y-m-d g:i a");
                                                //echo $indiatime ;
                        
                        
                    }
                        ?>

                                      <label for="exampleInputName1">Mobile No:</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="<?php echo $contact;?>" readonly> 
                                    </div>
                                      <!-- <div class="form-group">
                                        <label for="exampleInputName1">Request Date:</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="exampleInputName1">Enquiry Date:</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="<?php echo $indiatime;?>" readonly>
                                       
                                      </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Reference code:</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Reference code" value="<?php echo $referenceId;?>" readonly>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label for="exampleInputName1">Result:</label>
                                        <textarea class="form-control"  name="textresult" rows="4" cols="100" readonly><?php echo $remark;?></textarea>
                                      </div>
                                
                                  </form>

                            </div>
                        </div>
                      <!-------------------------------------------------->

    <!--------------------------------------------------->
&nbsp;


<!-- <div class="card">
    <div class="card-body">
        
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>MALE</th>
                        <th>FEMALE</th>
                      
                        
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>DOB</td>
                         <td></td>
                        <td></td>
                    
                    </tr>
                    <tr>
                        <td>BiRTH PLACE</td>
                        <td></td>
                        <td>

                        </td>
                    
                    </tr>
                    <tr>
                        <td>TIME</td>
                        <td></td>
                        <td>

                        </td>
                    
                    </tr>
                    <tr>
                        <td>STAR</td>
                        <td></td>
                        <td>

                        </td>
                    
                    </tr>
                   
                 
                    
                </tbody>
                <tfoot>
                 </tfoot>
            </table>
        </div>

    </div>
</div> -->


   
                  
</div>   
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
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
            <footer class="footer text-center">
                Designed and Developed by <a href="http://calcus.in/" target="_blank">Calcus Technologies</a>. All rights reserved.
                </footer>
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
    <script src="<?php echo base_url();?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>/dist/js/custom.min.js"></script>
       <!-- this page js -->
 <script src="<?php echo base_url();?>/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
 <script src="<?php echo base_url();?>/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
 <script src="<?php echo base_url();?>/assets/extra-libs/DataTables/datatables.min.js"></script>
 <script>
     /****************************************
      *       Basic Table                   *
      ****************************************/
     $('#zero_config').DataTable();
 </script>
   <!-- popover js -->
   <script src="<?php echo base_url();?>/assets/js/popover.js"></script>

		<!-- Custom Js-->
		<script src="<?php echo base_url();?>/assets/js/admin-custom.js"></script>
</body>

</body>

</html>