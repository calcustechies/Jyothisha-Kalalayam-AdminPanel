<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardCtrl extends CI_Controller
{
    function viewfillterbasedhoroscope()
    {
        $fromDate   =$this->input->post('fromDate');
        $toDate   =$this->input->post('toDate');
        $withorwithout   =$this->input->post('withorwithout');
        $pendingornot   =$this->input->post('pendingornot');
        $this->load->model('DashboardModel');
        $resultData['ViewallHoroscope'] = $this->DashboardModel->viewfillterbasedhoroscope($fromDate,$toDate,$withorwithout,$pendingornot);
        print_r($resultData['ViewallHoroscope']->result_array(),true);
        $result=$resultData['ViewallHoroscope']->result_array();

        $datafilter= json_encode(array('status' => '200', 'message' => 'success', 'view_details' => $result));
        $draw = intval($this->input->get("draw"));
        // $start = intval($this->input->get("start"));
        // $length = intval($this->input->get("length"));

        //$HNDatas = $this->hospitallib->ViewHospitalNetworks();
        $resultdata = json_decode($datafilter, true);
        $countOfdata= count($resultdata['view_details']);

        //echo $data;
        
        $data = [];
        $k=1;

        for ($i = 0; $i < $countOfdata; $i++) {
            $masterId = $resultdata['view_details'][$i]['masterId'];
            $contactNbr = $resultdata['view_details'][$i]['contactNbr'];
            $withorwithout = $resultdata['view_details'][$i]['withorwithout'];
            
            $PendingCountOfWithoutHoroscope = $resultdata['view_details'][$i]['PendingCountOfWithoutHoroscopeRemark'];
            $PendingCountOfWithHoroscope = $resultdata['view_details'][$i]['PendingCountOfWithHoroscopeRemark'];
            
            $systemTime = $resultdata['view_details'][$i]['systemTime'];
            $freezeId = $resultdata['view_details'][$i]['freezeId'];
            // $eventsDateTime = $resultdata['view_details'][$i]['eventsDateTime'];
            // $ClubName = $resultdata['view_details'][$i]['ClubName'];
         
            //$systemdate=date("d-m-Y h:m:s A", strtotime($systemTime));
            
             $date=date_create($systemTime,timezone_open("America/Los_Angeles"));
                                                //echo date_format($date,"Y-m-d H:i:sP")."<br>";

            date_timezone_set($date,timezone_open("Asia/Kolkata"));
            $indiatime = date_format($date,"Y-m-d g:i a") . "<br>";
                                               // echo $indiatime ;
            
            if($withorwithout==1){
            $operation = '<a href="'.base_url('Withhoroscope/?id1='.$masterId).'"><button type="button" class="btn btn-success"><i class="mdi mdi-eye"></i></button></a>';
            }
            else
             {
                $operation = '<a href="'.base_url('Withouthoroscope/?id1='.$masterId).'"><button type="button" class="btn btn-primary"><i class="mdi mdi-eye"></i></button></a>';
             }
            if($withorwithout==1){
                
               $countofpending   = $PendingCountOfWithHoroscope;
            }else{
                $countofpending   = $PendingCountOfWithoutHoroscope;
            }

           

            $data[] = array(
                $masterId,
                $contactNbr,
                $indiatime,
                $countofpending,
                $operation
               
             
            );
               $k++;
        }
        $result = array(
            "draw" => $draw,
             "recordsTotal" => $countOfdata,
             "recordsFiltered" => $countOfdata,
             "data" => $data
         );
        echo json_encode($result);
        exit();
    }

}