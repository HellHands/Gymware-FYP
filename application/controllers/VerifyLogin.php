<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();

class VerifyLogin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function Index(){

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
			$sess_array = array();
			
			foreach($result as $row)
			{
		   		$sess_array = array(
		     		'member_id' => $row->member_id,
		     		'member_email' => $row->member_email
		   		);

		   		$this->session->set_userdata('logged_in', $sess_array);
			}
			
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid email or password');
		 	return false;
		}
	}
}