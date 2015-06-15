<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('partials/header');
		$this->load->view('login/login');
		$this->load->view('login/loginfooter');
	}
}