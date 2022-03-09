<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginCtrl extends CI_Controller
{

     //LOGIN
     public function login()
     {
         $UserName = $this->input->post('UserName');
         $Password = $this->input->post('Password');
         
         
     $this->load->model('LoginModel');
     $resultData=$this->LoginModel->login($UserName,$Password);
    // print_r($resultData->result_array(),true);

    foreach($resultData->result_array() as $row)
     {
         $userID=$row['@rootID'];
        //  $email=$row['@em'];
        //  $userName= $row['@uname'];
        //  $catID=$row['@cat'];

     }

     if($userID >0)
     {
        $this->session->set_userdata('UserID',$userID); 
        echo true;
     }else
     {
        echo false;
     }
    

     }

}