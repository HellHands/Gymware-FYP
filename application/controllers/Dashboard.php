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
			$session_data     = $this->session->userdata('logged_in');
			$fullname         = $session_data['member_fname'] . ' ' . $session_data['member_lname'];			
			$data['email']    = $session_data['member_email'];
			$data['id']       = $session_data['member_id'];
			$data['name']     = $fullname;
			$data['joindate'] = $session_data['member_joindate'];
			$data['pkg']      = $session_data['member_package']; 
	
			$this->load->view('dashboard/dashboard_header', $data);
			$this->load->view('dashboard/dashboard', $data);
			$this->load->view('dashboard/dashboard_footer', $data);
	   	}
	   	else
	   	{
	    	//If no session, redirect to login page
	    	redirect(base_url('login'), 'refresh');
	   	}
 	}
 
	function logout()
	{
   		$this->session->unset_userdata('logged_in');
	   	session_destroy();
	   	redirect(base_url('login'), 'refresh');
	}
}