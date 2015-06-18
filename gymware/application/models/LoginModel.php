<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
	
	function __construct(){
		parent::__construct();
		//$this->load->model('FullInfoModel');
	}

	function login($email, $password)
 	{
 		$pass = md5($password);
		
		$query = $this->db->query("SELECT member_id, member_email, member_upass 
									FROM members 
									WHERE member_email = '{$email}' 
									AND member_upass = '{$pass}'", 1);
		
		if($query->num_rows() == 1)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
 	}
}