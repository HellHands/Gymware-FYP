<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}

	function login($email, $password)
 	{
 		$pass = md5($password);

		$this -> db -> select('member_id, member_email, member_upass');
		$this -> db -> from('members');
		$this -> db -> where('member_email', $email);
		$this -> db -> where('member_upass', $pass);
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
 	}
}