<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EnquiryCtrl extends CI_Controller {

    public function ViewInquiryFilter ()
	{
		$from_date=$this->input->post('from_date');
        $to_date=$this->input->post('to_date');

        $this->load->model('EnquiryModel');
		$resultData['Viewallenquiry'] = $this->EnquiryModel->ViewInquiryFilter($from_date,$to_date);
        //print_r($resultData['Viewallenquiry']->result_array(),false);
        $result=$resultData['Viewallenquiry']->result_array();	
       // print_r($result);
       $datafilter= json_encode(array('status' => '200', 'message' => 'success', 'view_details' => $result));
      // print_r($datafilter);

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
            $inquiryPaidDateTime = $resultdata['view_details'][$i]['inquiryPaidDateTime'];
            $inquiryPaidAmt = $resultdata['view_details'][$i]['inquiryPaidAmt'];
            $inquiryPaidFlg = $resultdata['view_details'][$i]['inquiryPaidFlg'];
            $masterId = $resultdata['view_details'][$i]['masterId'];
            $contactNbr = $resultdata['view_details'][$i]['contactNbr'];
            $referenceID = $resultdata['view_details'][$i]['referenceID'];

            //$uploaddate=date('d-m-Y', strtotime($inquiryPaidDateTime) );
            
            $date=date_create($inquiryPaidDateTime,timezone_open("America/Los_Angeles"));
                                                //echo date_format($date,"Y-m-d H:i:sP")."<br>";

            date_timezone_set($date,timezone_open("Asia/Kolkata"));
            $indiatime = date_format($date,"Y-m-d") . "<br>";
                                                //echo $indiatime ;
            
            // $eventsDateTime = $resultdata['view_details'][$i]['eventsDateTime'];
            // $ClubName = $resultdata['view_details'][$i]['ClubName'];
         
            //$eventdate=date('Y-m-d', strtotime($eventsDateTime) );
            //if($withorwithout==1){
            $operation = '<a href="'.base_url('Viewenquiry/?id1='.$masterId.'&reID='.$referenceID).'"><button type="button" class="btn btn-outline-success"><i class="mdi mdi-eye"></i></button></a>';
            $operation.='<button type="button" class="btn btn-outline-success" style="margin-left: 0.25rem !important;"id="complete_'.$referenceID.'" onclick="completedenquiry(this.id)"><i class="fa fa-check"style="color:rgb(195, 55, 55);font-size: 20px;"></i></button>';
            
            // }
            // else
            //  {
            //     $operation = '<a href="'.base_url('Withouthoroscope/?id1='.$masterId).'"><button type="button" class="btn btn-primary"><i class="mdi mdi-eye"></i></button></a>';
            //  }
            

           

            $data[] = array(
                $k,
                $contactNbr,
                $referenceID,
                $indiatime,
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



public function InquiryMarkAsCompleted()
    {
        $referenceID = $this->input->post('referenceID');
        $this->load->model('EnquiryModel');
		$resultData['Viewallenquiry'] = $this->EnquiryModel->InquiryMarkAsCompleted($referenceID);

        echo true;
    }

	//}
}