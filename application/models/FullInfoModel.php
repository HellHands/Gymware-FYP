<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FullInfoModel extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}

	function get_FullInfo($id)
 	{
 		
 		$query = $this->db->query("SELECT member_fname, member_lname, member_joindate, member_package 
 									FROM members_info 
									WHERE member_id = '{$id}'", 1);
		
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