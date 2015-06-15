<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

//session_start();

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}

	function index()
 	{
   		if($this->session->userdata('logged_in'))
   		{
			$session_data  = $this->session->userdata('logged_in');
			$data['email'] = $session_data['member_email'];
			$data['id']    = $session_data['member_id'];
			
			$this->load->view('dashboard/dashboard', $data);
	   	}
	   	else
	   	{
	    	//If no session, redirect to login page
	    	redirect('login', 'refresh');
	   	}
 	}
 
	function logout()
	{
   		$this->session->unset_userdata('logged_in');
	   	session_destroy();
	   	redirect(base_url('login'), 'refresh');
	}
}