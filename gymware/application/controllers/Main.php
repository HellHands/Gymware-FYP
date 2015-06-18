<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index(){
		$this->load->view('partials/header');
		$this->load->view('partials/landing_page');
		$this->load->view('partials/footer');

	}

	public function register(){
		$this->load->view('partials/header');
		$this->load->view('register/register');
		$this->load->view('register/registerfooter');
	}

	public function howitworks(){
		$this->load->view('partials/header');
		$this->load->view('partials/footer');
	}
	public function pricing(){
		$this->load->view('partials/header');
		$this->load->view('partials/footer');
	}
	public function contact(){
		$this->load->view('partials/header');
		$this->load->view('partials/footer');
	}
	public function features(){
		$this->load->view('partials/header');
		$this->load->view('partials/footer');
	}
}
