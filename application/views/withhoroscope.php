
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
                                <!-- <h5 class="card-title">Full Width</h5> -->
                                <form class="forms-sample">
                                    <div class="form-group">
                                    <?php 
                                    $i=1;
                            foreach($ViewwithHoroscope->result_array() as $row)
                                {
                                    $gender=$row['gender'];
                                    $SystemTime=$row['SystemTime'];
                                    $contactNbr=$row['contactNbr'];
                                    $user_hors=$row['user_hors'];

                                    //$d=strtotime("tomorrow");
                                   //$datetime=date("Y-m-d h:i:sa", $SystemTime);
                                   $datetime = date("d-m-Y h:m:s A", strtotime($SystemTime));
                                }
                                    ?>
                                      <label for="exampleInputName1">Mobile No:</label>
                                      <input type="text" class="form-control" value="<?php echo $contactNbr;?>" id="exampleInputName1" placeholder="Name" readonly>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="exampleInputName1">Reference Code:</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                                      </div> -->

                                    <div class="form-group">
                                      <label for="exampleInputName1">Date:</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="<?php echo $datetime;?>" readonly>
                                     
                                    </div>
                                
                                    <div class="form-group">
                                      <label for="exampleSelectGender">Gender:</label>
                                        <!-- <select class="form-control" id="exampleSelectGender">
                                          <option>Male</option>
                                          <option>Female</option>
                                        </select> -->
                                        <?php
                                        if($gender==1)
                                        {
                                        ?>
                                        <input type="text" class="form-control" placeholder="Name" value="Male"  readonly>
                                    <?php 
                                        }
                                        else{
                                            ?>
                                            <input type="text" class="form-control" placeholder="Name" value="Female"  readonly>
                                    <?php
                                        }
                                
                                    ?>

                                      </div>
                                  
                                      <div>
                                        <label for="exampleSelectGender">Horoscope:</label>
                                        <a  href="<?php echo $user_hors;?>" class="btn btn-success" style="margin-left: 10px;" target="_blank"><i class="mdi mdi-eye"></i> &nbsp;VIEW</a>
                                        </div>
                                    
                                  </form>

                            </div>
                        </div>
                    
<!-------------------------------------------------->


<div class="card">
    <div class="card-body">
        <!-- <h5 class="card-title">Basic Datatable</h5> -->
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <!-- <th>Horoscope</th> -->
                        <th>Refernce code </th>
                        <th> Result</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                $i=1;
                foreach($ViewwithHoroscope->result_array() as $row1)
                    {
                        $referenceWithHoroscopeID=$row1['referenceWithHoroscopeID'];
                        $referenceID=$row1['referenceID'];
                        $contactNbr=$row1['contactNbr'];
                        $withHoroscopeID=$row1['withHoroscopeID'];
                        $referenceWithHoroscopeID=$row1['referenceWithHoroscopeID'];
                        $remarkStatus=$row1['remarkStatus'];
                        $remark=$row1['remark'];
                        $horoscope=$row1['horoscope'];

                        ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $referenceID;?></td>
                        <td> 
                          
                          <a  href="<?php echo $horoscope;?>" class="btn btn-outline-success" target="_blank"><i class="mdi mdi-eye"></i></a> 
                          
                          <?php
                          if($remarkStatus == 1){
                          ?>
                          <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal<?php echo $referenceWithHoroscopeID;?>"><i class="mdi mdi-update"></i>   
                          </button>
                          <?php
                          }else{
                          ?>
                          <button type="button" class="btn btn-danger btn-icon-text" data-toggle="modal" data-target="#exampleModal<?php echo $referenceWithHoroscopeID;?>"><i class="mdi mdi-plus"></i>   
                          </button>
                          <?php
                          }
                          ?>
                      </td>
                    
                    </tr>


                          <!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $referenceWithHoroscopeID;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <input type="hidden" value="<?php echo $referenceID;?>" id="refeID<?php echo $referenceWithHoroscopeID;?>">
   
<?php
if($remarkStatus ==1){
?>
<div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel" style="color:green">Result</h5> 
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
<div class="form-group">



<textarea class="form-control" id="contenttextID<?php echo $referenceWithHoroscopeID;?>" rows="4"><?php echo $remark;?></textarea>
<?php
}else{
?>
<div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel"  style="color:red">Result</h5> 
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
<div class="form-group">


<textarea class="form-control" id="contenttextID<?php echo $referenceWithHoroscopeID;?>" rows="4"></textarea>

<?php
}
?>
<!-- <input type="text" value="<?php //echo $referenceWithHoroscopeID;?>" id="reference<?php// echo $referenceWithHoroscopeID;?>"> -->
</div>

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-primary" id="<?php echo $referenceWithHoroscopeID;?>" onclick="insertvalue(this.id)">Save</button>

</div>
</div>
</div>
</div>
<!--end modal-->




                    <?php
                    $i++;
                    }
                    ?>

                    <!-- <tr>
                        <td>2</td>
                        <td>#930</td>
                        <td> 
                          
                          <a  href="#" class="btn btn-outline-success" ><i class="mdi mdi-eye"></i>   
                          </a>

                        <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-plus"></i>   
                        </button>
                     
                                                                
                      </td>
                    
                    </tr> -->
                   
                    <!-- <tr>
                        <td>001</td>
                        <td>0123456878989</td>
                        <td>  
                         <button type="button" class="btn btn-outline-success"><i class="mdi mdi-eye"></i></button>   
                        </button>
                        </td>
                    </tr>
                   -->
                    
                </tbody>
                <!-- <tfoot>
                    <tr>
                        <th>Sl No</th>
                        <th>Horoscope</th>
                        <th>Refernce code </th>
                        <th>Result</th>
                        
                    </tr>
                </tfoot> -->
            </table>
        </div>

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
    function insertvalue(e)
    {
       
        var referenceID =$('#refeID'+e).val();
        var contenttextID =$('#contenttextID'+e).val();
        //alert(referenceID);
        $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>HoroscopeCtrl/upsertRemarkToWithHoroscope",
                data: {
                    // sem_id : check_sem_id,
                    referenceWithHoroscopeID :e,
                    remark  :contenttextID,
                    referenceID:referenceID
                },
                success: function(data) {
                    //$('#students_view').html(data);

                   // console.log(data);
                    //alert(data);
                    window.location.reload();

                }
            });


    }
</script>