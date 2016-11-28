<?php

class Model_users extends CI_Model {
	public function check_if_admin($user_name)
		{
			$this->db->where('user_name', $user_name);
			$query = $this->db->get('users');
			if ($query->row()->priority == 2 ){
				return 2;
				}
			elseif ($query->row()->priority == 1) {
					return 1;
				}
			else return 0;
	}

	public function add_user($data){

		$query = $this->db->insert('users', $data);
		if ($query){
			return true;
		} else {
			return false;
		}
	}

	public function can_log_in(){
		$this->db->where('user_name', $this->input->post('user_name'));
		$this->db->where('password', md5($this->input->post('password')));

		$query = $this->db->get('users');

		if ($query->num_rows() > 0){
			return true;
		} else {
			return false;
		}
	}
	
}