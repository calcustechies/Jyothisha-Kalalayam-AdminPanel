<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeCtrl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	//VIEW DASHBOARD
	public function dashboard()
	{
		$userId = $this->session->userdata('UserID');
		if($userId > 0)
        {

		$this->load->model('DashboardModel');
		$resultData['ViewallHoroscope'] = $this->DashboardModel->ViewallHoroscope();
		print_r($resultData['ViewallHoroscope']->result_array(),true);	
		$this->load->view('header');
		$this->load->view('dashboard',$resultData);
	}else
	{
		redirect('Index');
	}
	}

	//WITH HOROSCOPE
	public function withhoroscope()
	{
		$userId = $this->session->userdata('UserID');
		if($userId > 0)
        {
		$withHoroscopeID =$_GET['id1'];
		//echo $withHoroscopeID;
		$referenceID	=0;
		$this->load->model('HoroscopeModel');
		$resultData['ViewwithHoroscope'] = $this->HoroscopeModel->ViewonewithHoroscope($withHoroscopeID,$referenceID);
		//print_r($resultData['ViewwithHoroscope']->result_array(),false);
		$this->load->view('header',$resultData);
		$this->load->view('withhoroscope');
	}else
	{
		redirect('Index');
	}
	}

	//WITH OUT HOROSCOPE
	public function withouthoroscope()
	{
		$userId = $this->session->userdata('UserID');
		if($userId > 0)
        {
		$WithoutHoroscopeID=$_GET['id1'];
		//echo $WithoutHoroscopeID;
		$this->load->model('HoroscopeModel');
		$resultData['ViewwithoutHoroscope'] = $this->HoroscopeModel->ViewOneWithoutHoroscopeRequest($WithoutHoroscopeID);
		 print_r($resultData['ViewwithoutHoroscope']->result_array(),true);
		$this->load->view('header');
		$this->load->view('withouthoroscope',$resultData);
	}else
	{
		redirect('Index');
	}
	}

//VIEW ENQUIRY
	public function enquiry()
	{
		$userId = $this->session->userdata('UserID');
		if($userId > 0)
        {
		// $fromDate =0; 
        // $toDate =0;
		// $this->load->model('EnquiryModel');
		// $resultData['Viewallenquiry'] = $this->EnquiryModel->ViewInquiryFilter($fromDate,$toDate);
		// print_r($resultData['Viewallenquiry']->result_array(),true);	
		$this->load->view('header');
		$this->load->view('enquiry');
	}else
	{
		redirect('Index');
	}
	}


	//VIEW ONE ENQUIRY
	public function viewenquiry()
	{
		$userId = $this->session->userdata('UserID');
		if($userId > 0)
        {
		 $masterId=$_GET['id1'];
		 $referenceID=$_GET['reID'];
		
		//echo $referenceID;
		$this->load->model('EnquiryModel');
		$resultData['Viewoneenquiry'] = $this->EnquiryModel->ViewAllHorosFilter($masterId,$referenceID);
		print_r($resultData['Viewoneenquiry']->result_array(),true);	
		$this->load->view('header');
		$this->load->view('viewenquiry',$resultData);
	}else
	{
		redirect('Index');
	}
	}


	public function logout()
    {
        
        $this->session->unset_userdata('UserID');
        $this->session->sess_destroy();
        redirect('Index');
    }

}
