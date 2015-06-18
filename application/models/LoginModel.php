<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}

	function login($email, $password)
 	{
 		$pass = md5($password);
		
		$query = $this->db->query("SELECT member_id, member_email, member_upass FROM members WHERE member_email = '{$email}' AND member_upass = '{$pass}'", 1);
		
		if($query->num_rows() == 1)
		{
			$row = $query->row_array();
			$id = $row['member_id'];
			$query2 = $this->db->query("SELECT member_fname, member_lname, member_joindate, member_package from members_info WHERE member_id = '{$id}'");
			//return $query->result();
		}
		else
		{
			return false;
		}
 	}
}