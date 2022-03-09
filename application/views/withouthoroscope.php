
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
                                <div>
                                    <button type="button" class="btn btn-success btn-lg" onclick="dataupsert()" style="margin-left: 900px;">UPDATE</button>
                                    </div>

                                    <?php
                $i=1;
                foreach($ViewwithoutHoroscope->result_array() as $row1)
                    {
                        $masterId=$row1['masterId'];
                        $systemTime=$row1['systemTime'];
                        $contactNbr=$row1['contactNbr'];
                        $referenceIdWithoutHoroscope=$row1['referenceIdWithoutHoroscope'];
                        $MaledateOfBirth=$row1['MaledateOfBirth'];
                        $MaletimeOfBirth=$row1['MaletimeOfBirth'];
                        $Maletime = date("h:m:s A", strtotime($MaletimeOfBirth));
                        $Malestar=$row1['Malestar'];
                        $Maleplace=$row1['Maleplace'];

                        $femaledateOfBirth=$row1['femaledateOfBirth'];
                        $femaletimeOfBirth=$row1['femaletimeOfBirth'];
                        $femaletime= date("h:m:s A", strtotime( $femaletimeOfBirth));
                        
                        $femalestar=$row1['femalestar'];
                        $femaleplace=$row1['femaleplace'];

                        $remark=$row1['remark'];

                        $datetime = date("d-m-Y h:m:s A", strtotime($systemTime));
                    }
                        ?>

                                <!-- <h5 class="card-title">Full Width</h5> -->
                                <form class="forms-sample">
                                    <div class="form-group">
                                      <label for="exampleInputName1">Mobile No:</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="<?php echo $contactNbr;?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Reference code:</label>
                                        <input type="text" class="form-control" id="refID" placeholder="Reference code" value="<?php echo $referenceIdWithoutHoroscope;?>" readonly>

                                        <input type="hidden" id="masterID" name="masterID" value="<?php echo $masterId;?>" readonly/>
                                      </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Date:</label>
                                      <input type="text" class="form-control" value="<?php echo $datetime;?>" id="exampleInputName1" readonly>
                                     
                                    </div>
                                
                                  </form>

                            </div>
                        </div>
                      <!-------------------------------------------------->

    <!--------------------------------------------------->
&nbsp;


<div class="card">
    <div class="card-body">
        <!-- <h5 class="card-title">Basic Datatable</h5> -->
        <div class="table-responsive">
            <table  class="table table-striped table-bordered">
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
                         <td><?php echo $MaledateOfBirth;?></td>
                        <td><?php echo $femaledateOfBirth;?></td>
                    
                    </tr>
                    <tr>
                        <td>BIRTH PLACE</td>
                        <td><?php echo $Maleplace;?></td>
                        <td><?php echo $femaleplace;?></td>
                    
                    </tr>
                    <tr>
                        <td>TIME</td>
                        <td><?php echo $Maletime;?></td>
                        <td><?php echo $femaletime;?></td>
                    
                    </tr>
                    <tr>
                        <td>STAR</td>
                        <td><?php echo $Malestar;?></td>
                        <td><?php echo $femalestar;?></td>
                    
                    </tr>
                   
                 
                    
                </tbody>
                <tfoot>
                    <!-- <tr>
                        <th>Sl No</th>
                        <th>Horoscope</th>
                        <th>Refernce code </th>
                        <th>Result</th>
                        
                    </tr> -->
                </tfoot>
            </table>


        </div>
        <div class="form-group">
             <label for="exampleInputName1">Result:</label>
        <textarea class="form-control" id="resultdata"  name="resultdata" rows="4" cols="100"><?php echo $remark;?>
            </textarea>
        </div>

    </div>
</div>


       <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <!-- <h5 class="modal-title" id="exampleModalLabel"></h5> -->
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
<div class="form-group">
<label for="exampleTextarea1">Textarea</label>
<textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
</div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>

</div>
</div>
</div>
</div>
<!--end modal-->
                  
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


<script>
    function dataupsert()
    {
        var masterID    = $('#masterID').val();
        var resultdata    = $('#resultdata').val();
        var refID           = $('#refID').val();
        //alert(masterID);
        $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>HoroscopeCtrl/upsertRemarkToWithoutHoroscope",
                data: {
                    // sem_id : check_sem_id,
                    masterID :masterID,
                    resultdata  :resultdata,
                    refID       :refID
                },
                success: function(data) {
                    //$('#students_view').html(data);

                    //console.log(data);
                    //alert(data);
                    window.location.reload();

                }
            });


    }
</script>