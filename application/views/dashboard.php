<style>
.foo {
  float: left;
  width: 20px;
  height: 20px;
  margin: 5px;
  border: 1px solid rgba(0, 0, 0, .2);
}


</style>
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
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                   
                    <!-- Column -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-hover">
                            <div>
                                <?php
                                $datefrom=date('Y-m-d', strtotime('-7 days'))
                                ?>
                                <h4 class=" text-white"> From  Date:&nbsp;
                                    <input class=" form-control" type="date" value="<?php echo $datefrom; ?>" id="from_date" onchange="filterbasedondate()"></h4>
                                <!-- <h6 class="text-white"> Date:</h6> --> 
                               
                            </div>
                        </div>
                    </div>
                   
                    
   <!-- Column -->
   <div class="col-md-6 col-lg-6 col-xlg-4">
    <div class="card card-hover">
        <div>
            <h4 class=" text-white">
                To Date:  &nbsp; <input class=" form-control" type="date" id="to_date" value="<?php echo date("Y-m-d"); ?>" onchange="filterbasedondate()"></h4>
            <!-- <h6 class="text-white">To Date:</h6> -->
        </div>
    </div>
</div>

                  
                    <!-- Column -->
                   
                </div>
                <div class="row">
                        <div class="col-md-4">
                        
                        </div>
                        <div class="col-md-4">
                            <div class="foo" style="background-color:#28b779"></div> With Horoscope
                        </div>
                        <div class="col-md-4">
                            <div class="foo" style="background-color:#7460ee"></div> Without Horoscope
                        </div>
                </div>

               
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
               
                <div class="row" id="header5">
                    <div class="col-md-6">
                        <label>Type:</label>
                        <select class="form-control form-group" id="typehoroscope" name="typehoroscope" onchange="viewhoroscope()">
                            <option value="0">All</option>
                            <option value="1">WITH HOROSCOPE</option>
                            <option value="2">WITHOUT HOROSCOPE</option>
    </select>
                             
    </div> 
    
     <div class="col-md-6">
                        <label>Status:</label>
                        <select class="form-control form-group" id="typeofstatus" name="typeofstatus" onchange="viewhoroscope()">
                             <option value="2">All</option>
                            <option value="1">Pending</option>
                            <option value="0">completed</option>
                            <!--<option value="2">WITHOUT HOROSCOPE</option>-->
    </select>
                             
    </div> 
    

                    <!--<div class="col-md-4">-->
                    <!--    <input type="button" id="with_0" class="btn btn-outline-success btn-lg btn-block active" value="ALL" onclick="viewhoroscope(this.id)" checked>-->
                             
                    <!--        </div> -->

                    <!--<div class="col-md-4">-->
                    <!--  <input type="button" class="btn btn-outline-success btn-lg btn-block" id="with_1" value="WITH HOROSCOPE" onclick="viewhoroscope(this.id)">-->
                           
                    <!--      </div> -->
                    <!--      <div class="col-md-4">-->
                    <!--        <input  type="button" id="with_2"  class="btn btn-outline-success  btn-lg btn-block" value="WITHOUT HOROSCOPE"  onclick="viewhoroscope(this.id)">-->
                    <!--      </div>-->
                          <input type="hidden" value="0" id="hiddendata">
                  </div>

<br>
<br>

                  <div class="card">
                    <div class="card-body">
                        <!-- <h5 class="card-title">Basic Datatable</h5> -->
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL NO</th>
                                        <th>MOBILE NO</th>
                                        <th>Date</th>
                                        <th>Pending Count</th>
                                        <th>OPERATIONS</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $i=1;
                            foreach($ViewallHoroscope->result_array() as $row)
                            {
                                $withorwithout=$row['withorwithout'];
                                $masterId=$row['masterId'];
                                $PendingCountOfWithoutHoroscope=$row['PendingCountOfWithoutHoroscopeRemark'];
                                $PendingCountOfWithHoroscope    =$row['PendingCountOfWithHoroscopeRemark'];
                                $systemTime=$row['systemTime'];
                                 $uploaddate=   date("d-m-Y h:i:s A", strtotime($systemTime));
                                 
                                //   $ustime = strtotime($systemTime) + 60*60*(0);
                                //      $uploaddate= date('d-m-Y g:i a', $ustime);
                                    
                               
                                 

                            ?>
                                    <tr>
                                    
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row['contactNbr'];?></td>
                                        <td>
                                            <?php
                                            
                                             $date=date_create($systemTime,timezone_open("America/Los_Angeles"));
                                                //echo date_format($date,"Y-m-d H:i:sP")."<br>";

                                                date_timezone_set($date,timezone_open("Asia/Kolkata"));
                                                $indiatime = date_format($date,"Y-m-d g:i a") . "<br>";
                                                echo $indiatime ;
                                            
                                            
                                            // // $ustime = strtotime($systemTime) + 60*60*(0);
                                            // // $uploaddate= date('d-m-Y g:i a', $ustime);
                                            // //$ordered_date = date('d-m-Y g:i a', $old_date_timestamp);
                                            // echo $uploaddate;
                                            ?>
                                        </td>
                                        
                                        <td>
                                            <?php 
                                            if($withorwithout==1)
                                            {
                                            ?>  
                                            <?php echo $PendingCountOfWithHoroscope;?>
                                        
                                        <?php
                                            }
                                            // if($withorwithout==2)
                                            else
                                            {
                                        ?>
                                            <?php echo $PendingCountOfWithoutHoroscope;?>
                                       
                                        <?php
                                            }
                                        ?>
                                        </td> 
                                        
                                        <td>
                                            <?php 
                                            if($withorwithout==1)
                                            {
                                            ?>  
                                         <a href="<?php echo base_url('Withhoroscope');?>?id1=<?php echo $masterId;?>"><button type="button" class="btn btn-success"><i class="mdi mdi-eye"></i></button></a>   
                                        
                                        <?php
                                            }
                                            // if($withorwithout==2)
                                            else
                                            {
                                        ?>
                                             <a href="<?php echo base_url('Withouthoroscope');?>?id1=<?php echo $masterId;?>"><button type="button" class="btn btn-primary"><i class="mdi mdi-eye"></i></button></a>
                                       
                                        <?php
                                            }
                                        ?>
                                        </td>
                                       
                                        
                                        
                                    </tr>
                                    <?php
                                    $i++;
                                    }
                                    ?>
                                   
                                  
                                 
                                </tbody>
                               
                            </table>
                        </div>

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
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
    <script src="<?php echo base_url();?>/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo base_url();?>/assets/libs/flot/excanvas.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url();?>/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url();?>/dist/js/pages/chart/chart-page-init.js"></script>
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
</body>

</html>


<script>


// $('#with_0').on('click', function(){
//     $(this).siblings().removeClass('active'); // if you want to remove class from all sibling buttons
//     //$(this).toggleClass('active');
// });
// $("#header5 .btn-group[role='group'] button").on('click', function(){
//     $(this).siblings().removeClass('active')
//     $(this).addClass('active');
// })



    function viewhoroscope()
    {
  
        //var c=e.substring(5);

        var typehoroscope=$('#typehoroscope').val();
        var typeofstatus=$('#typeofstatus').val();
        //alert(typeofstatus);
        //$('input[id=hiddendata]').val(c);

        var from_date=$('#from_date').val();
if(from_date =='')
{
    from_date   =0; 
}else{
    var from_date=$('#from_date').val();
}


var to_date=$('#to_date').val();
if(to_date =='')
{
    to_date   =0; 
}else{
    var to_date=$('#to_date').val();
}
        
//alert(from_date);
    //    $.ajax({
    //         type: "POST",
    //         url: "<?php //echo base_url(); ?>DashboardCtrl/viewfillterbasedhoroscope",
    //         data: {
    //             withorwithout : c,
    //             toDate : to_date,
    //             fromDate : from_date
    //         },
    //         success: function(data) {
    //             //$('#add-agent').modal('hide');
    //              alert(data);
    //             //window.location.reload();
    //         }
    //     }); 
    $('#zero_config').DataTable({
        stateSave: true,
        fixedHeader: true,
        destroy: true,
        "ajax": {
            "url":"<?php echo base_url(); ?>DashboardCtrl/viewfillterbasedhoroscope",
            "type": 'POST',
            "data": {

                withorwithout :typehoroscope,
                toDate : to_date,
                fromDate : from_date,
                pendingornot:typeofstatus
            }
        }
    });   
  
//     $('.btn').on('click', function(){
//     $(this).siblings().removeClass('active'); // if you want to remove class from all sibling buttons
//     $(this).toggleClass('active');
// });


    }



    function filterbasedondate()
    {

        var from_date=$('#from_date').val();
        var to_date=$('#to_date').val();
        var typehoroscope=$('#typehoroscope').val();
        var typeofstatus=$('#typeofstatus').val();

        //alert(hiddendata)

        $('#zero_config').DataTable({
        stateSave: true,
        fixedHeader: true,
        destroy: true,
        "ajax": {
            "url":"<?php echo base_url(); ?>DashboardCtrl/viewfillterbasedhoroscope",
            "type": 'POST',
            "data": {

                withorwithout : typehoroscope,
                toDate : to_date,
                fromDate : from_date,
                pendingornot:typeofstatus
            }
        }
    }); 
    }




</script>