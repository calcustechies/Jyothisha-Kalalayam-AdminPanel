<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HoroscopeCtrl extends CI_Controller {

    public function upsertRemarkToWithHoroscope()
	{
        $referenceWithHoroscopeID=$this->input->post('referenceWithHoroscopeID');
        $referenceID=$this->input->post('referenceID');
        $remark=$this->input->post('remark');

        
     $this->load->model('HoroscopeModel');
    $resultData['Horoscope']= $this->HoroscopeModel->upsertRemarkToWithHoroscope ($referenceWithHoroscopeID,$remark);
   //$resultData['Horoscope']->next_result();
    //print_r($resultData['Horoscope']->result_array(),true);
    //echo true;
   
  if ($referenceWithHoroscopeID > 0) {
                    
                    $this->load->model('NotificationModel');
                    
                    $resp['getCustomerID'] = $this->NotificationModel->DisplayUserIDviaReferenceCode($referenceID);
                    //$result = $resp['getCustomerID']->result_array();
                    //print_r($result);
                
                	$resp['getCustomerID']->next_result();
                    
                    foreach ($resp['getCustomerID']->result_array() as $row) {

                        $CustID                  = $row['@usrID'];
                    }
   
   
  $resp['customerTokens'] = $this->NotificationModel->DisplayPushNotifyToken($CustID);
             			//$result = $resp['customerTokens']->result_array();
             			// $resp['customerTokens']->next_result();
             			
             			//print_r($result);
                    
                    foreach ($resp['customerTokens']->result_array() as $row2) {

                        $pushTok                  = $row2['FCMpushTok'];
              			}
                    	$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\r\n    \"to\": \"$pushTok\",\r\n    \"collapse_key\": \"type_a\",\r\n    \"notification\": {\r\n        \"body\": \"Body : Vivaha Porutham Requests\",\r\n        \"title\": \"Title : Upload Result\"   },\r\n    \"data\": {\r\n        \"body\": \"Body : Data\",\r\n        \"title\": \"Title : Data\"\r\n    }\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: key=AAAAal5x10s:APA91bFtxYBc8pfAw3Wp9BNm0drb-ybEWSMo37C_62BXL0z6MYs5nWfKYzu-p6kRAH_C2TwJxhtw22Z6PsLVgHjIAzBJDheHwHdPkCQAh67bwVBb67ZVYlTnXZ-jsCCIMJnnEPc8Vgkj"
  ),
));

$response = curl_exec($curl);

curl_close($curl); 
    $data = json_encode(array('status' => '200', 'message' => 'success'));
                    
                    	
                    
                        echo $data;
                    } else {
                        $data = json_encode(array('status' => '600', 'message' => 'failed'));
                        echo $data;
                    } 
    
  // }
    
    }


    public function upsertRemarkToWithoutHoroscope()
	{
        $masterID=$this->input->post('masterID');
        $remark=$this->input->post('resultdata');
        $referenceID      =$this->input->post('refID');
        
        //$refID  

        
    $this->load->model('HoroscopeModel');
    $resultData= $this->HoroscopeModel->upsertRemarkToWithoutHoroscope($masterID,$remark);
    //print_r($resultData['Horoscope']->result_array(),false);
    //echo true;
    
    
    if ($masterID > 0) {
                    
                    $this->load->model('NotificationModel');
                    
                    $resp['getCustomerID'] = $this->NotificationModel->DisplayUserIDviaReferenceCode($referenceID);
                    //$result = $resp['getCustomerID']->result_array();
                    //print_r($result);
                
                	$resp['getCustomerID']->next_result();
                    
                    foreach ($resp['getCustomerID']->result_array() as $row) {

                        $CustID                  = $row['@usrID'];
                    }
   
   
  $resp['customerTokens'] = $this->NotificationModel->DisplayPushNotifyToken($CustID);
             			$result = $resp['customerTokens']->result_array();
             			// $resp['customerTokens']->next_result();
             			
             			//print_r($result);
                    
                    foreach ($resp['customerTokens']->result_array() as $row2) {

                        $pushTok                  = $row2['FCMpushTok'];
              			}
                    	$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\r\n    \"to\": \"$pushTok\",\r\n    \"collapse_key\": \"type_a\",\r\n    \"notification\": {\r\n        \"body\": \"Body : Vivaha Porutham Requests\",\r\n        \"title\": \"Title : Upload Result\"   },\r\n    \"data\": {\r\n        \"body\": \"Body : Data\",\r\n        \"title\": \"Title : Data\"\r\n    }\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: key=AAAAal5x10s:APA91bFtxYBc8pfAw3Wp9BNm0drb-ybEWSMo37C_62BXL0z6MYs5nWfKYzu-p6kRAH_C2TwJxhtw22Z6PsLVgHjIAzBJDheHwHdPkCQAh67bwVBb67ZVYlTnXZ-jsCCIMJnnEPc8Vgkj"
  ),
));

$response = curl_exec($curl);

curl_close($curl); 
    $data = json_encode(array('status' => '200', 'message' => 'success'));
                    
                    	
                    
                        echo $data;
                    } else {
                        $data = json_encode(array('status' => '600', 'message' => 'failed'));
                        echo $data;
                    } 
    
    
    
    }




}