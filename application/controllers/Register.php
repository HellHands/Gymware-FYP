<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('RegisterModel');
	}

	public function index()
	{
		$this->load->view('partials/header');
		$this->load->view('register/register');
		$this->load->view('register/registerfooter');
	}


	public function reg_User()
	{
		$fname     = $this->input->post('fname');
		$lname     = $this->input->post('lname');
		$email     = $this->input->post('email');
		$password  = md5($this->input->post('password'));
		$cpassword = md5($this->input->post('cpassword'));
		$package   = $this->input->post('pkg');
		
		if($password === $cpassword)
		{
			if($this->RegisterModel->registerUser($email, $password, $fname, $lname, $package))
			{
				echo "yoo!";
			}
		}
		else
		{
			show_error('Password dont match',503);
		}
	}
	public function fun(){
		echo "you've reached successfully! ";
	}
}