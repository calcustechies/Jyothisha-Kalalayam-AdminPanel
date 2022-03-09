
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
                          <div class="row">
                   
                   <!-- Column -->
                   <div class="col-md-6 col-lg-6 col-xlg-4">
                       <div class="card card-hover">
                           <div>
                               <h4 class=" text-back"> From  Date:&nbsp;
                                   <input type="date" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="from_date" onchange="filterdateenquiry()"></h4>
                               <!-- <h6 class="text-white"> Date:</h6> --> 
                              
                           </div>
                       </div>
                   </div>
                  
                   
  <!-- Column -->
  <div class="col-md-6 col-lg-6 col-xlg-4">
   <div class="card card-hover">
       <div>
           <h4 class=" text-back">
               To Date:  &nbsp; <input type="date" class="form-control" value="<?php echo date("Y-m-d"); ?>"  id="to_date" onchange="filterdateenquiry()"></h4>
           <!-- <h6 class="text-white">To Date:</h6> -->
       </div>
   </div>
</div>

                 
                   <!-- Column -->
                  
               </div>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                       
                    
<!-------------------------------------------------->

<div class="card">
    <div class="card-body">
        <!-- <h5 class="card-title">Basic Datatable</h5> -->
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Mobile Number</th>
                        <th>Reference code </th>
                        <th>Date</th>
                        <th>Operation</th>
                        
                    </tr>
                </thead>
                
                  
                    
                    
                </tbody>
               
            </table>
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
<p><b>Are You Sure Want To Continue....?</b></p>
<input type="hidden" id="refID">
</div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" onclick="inquirycompleted()" data-dismiss="modal">YES</button>

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


$(document).ready(function() {
    //document.getElementById("endDate").value = "2021-30-06";
    from_date = $('#from_date').val();
    //alert(from_date);
   
   var fullDate = new Date()
     
   //convert month to 2 digits
   var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
    
   var currentDate = fullDate.getFullYear() + "/" + twoDigitMonth + "/" + fullDate.getDate();
   //alert(currentDate);

   $('#zero_config').DataTable({
        stateSave: true,
        fixedHeader: true,
        destroy: true,
        "ajax": {
            "url":"<?php echo base_url(); ?>EnquiryCtrl/ViewInquiryFilter",
            "type": 'POST',
            "data": {
                from_date : from_date,
                to_date : currentDate
            }
        }
    });



});






    function filterdateenquiry()
    {
        var from_date    = $('#from_date').val();
        var to_date    = $('#to_date').val();
        //alert(from_date);

    


    $('#zero_config').DataTable({
        stateSave: true,
        fixedHeader: true,
        destroy: true,
        "ajax": {
            "url":"<?php echo base_url(); ?>EnquiryCtrl/ViewInquiryFilter",
            "type": 'POST',
            "data": {
                from_date : from_date,
                to_date : to_date
            }
        }
    }); 

    }
    
    
    function completedenquiry(e)
    {
        var c=e.substring(9);
        //alert(c);
        
        $('input[id=refID]').val(c);
        //$('input[id=agent_freeze1]').val(agent_freeze_no);
        $("#exampleModal").modal("show");
    }
    
    function inquirycompleted()
    {
        
        var refID   =$('#refID').val();
        //alert(refID);
         $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>EnquiryCtrl/InquiryMarkAsCompleted",
            data: {
                referenceID : refID
                

            },
            success: function(data) {
                //$('#freeze-agent').modal('hide');
                //alert(data);
                window.location.reload();
            }
        });
    }
</script>