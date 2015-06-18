<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();

class VerifyLogin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('LoginModel');
		$this->load->model('FullInfoModel');
	}

	public function Index()
	{

		$this->load->library('form_validation');
	 
	   	$this->form_validation->set_rules('email', 'Email', 'trim|required');
	   	$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
	 
	 	if($this->form_validation->run() == FALSE)
	   	{			
			$this->load->view('partials/header');
			$this->load->view('login/login');
			$this->load->view('login/loginfooter');

	   	}
	   	else
	   	{
		    redirect(base_url('dashboard'), 'refresh');
	   	}
 	}
 
	function check_database($password)
	{
		$email = $this->input->post('email');
		
		$result = $this->LoginModel->login($email, $password);
		

		if($result)
		{
			
			$fullinfo = $this->FullInfoModel->get_FullInfo($result['member_id']);
			//$result['member_id'];

			$sess_array = array();
	   		$sess_array = array(
	     		'member_id' => $result['member_id'],
	     		'member_email' => $result['member_email'],
	     		'member_fname' => $fullinfo['member_fname'],
	     		'member_lname' => $fullinfo['member_lname'],
	     		'member_joindate' => $fullinfo['member_joindate'],
	     		'member_package' => $fullinfo['member_package']
	   		);

	   		$this->session->set_userdata('logged_in', $sess_array);
			
			
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid email or password');
		 	return FALSE;
		}
	}
}