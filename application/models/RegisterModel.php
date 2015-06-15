<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterModel extends CI_Model {
	
	public function registerUser($email, $password, $fname, $lname, $pkg)
	{

		$memberCredentials = array(
						        'member_email' => $email,
						        'member_upass' => $password
							);

		
		if($this->db->insert('members', $memberCredentials))
		{
			$this->db->select('member_id');
			$this->db->from('members');
			$this->db->where('member_email', $email);
			$this->db->limit(1);
			
			$query = $this->db->get();
			
			foreach ($query->result() as $row)
			{
		        $tmp_id = $row->member_id;
			}

			$memberInfo        = array(
									'member_id'      => $tmp_id,
									'member_fname'   => $fname,
									'member_lname'   => $lname,
									'member_package' => $pkg
								);

			if($query -> num_rows() == 1)
			{
				$this->db->insert('members_info', $memberInfo);
				redirect('register', 'refresh');
			}
			else
			{
			 	return false;
			}
		}
	}
	public function loginUser($uname, $pass)
	{
		//redirect(base_url('register'), 'refresh');
	}

}