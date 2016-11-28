<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	//-------------------------------------------------------------------views
	public function index()
	{
		$this->index_page();
	}

	public function index_page(){
		$this->load->view('index');
	}
	public function manage_staff(){
		$this->load->view('manage_staff');
	}
	public function manage_guests(){
		$this->load->view('manage_guests');
	}
	public function manage_bookings(){
		$this->load->view('manage_bookings');
	}
	public function manage_rooms(){
		$this->load->view('manage_rooms');
	}
	public function manage_membership(){
		$this->load->view('manage_membership');
	}
	public function edit_hotel(){
		$this->load->view('edit_hotel');
	}
	public function test(){
		$this->load->view('test');
	}
	public function login(){
		$this->load->view('login');
	}
	public function signup(){
		$this->load->view('signup');
	}

	//-------------------------------------------------------------------delete
	public function delete_hotel(){
		$Hotel_ID = $this->input->post('Hotel_ID');
		$this->db->where('Hotel_ID', $Hotel_ID);
		if ($this->db->delete('Hotels')){
			redirect('main/index');
		}
	}
	public function delete_staff(){
		
	}

	public function delete_room(){
		
	}

	public function delete_booking(){
		
	}

	public function delete_membership(){
		
	}

	public function delete_guest(){
		
	}


	//-------------------------------------------------------------------edit
	public function edit_hotel_form(){
		$Hotel_ID = $this->input->post('Hotel_ID');
		$data = array(
			'Hotel_Name' => $this->input->post('Hotel_Name'),
			'Hotel_Address' => $this->input->post('Hotel_Address'),
			'Hotel_URL' => $this->input->post('Hotel_URL'),
			'size' => $this->input->post('size')
			);
		$data = array_filter($data);
		$this->db->where('Hotel_ID', $Hotel_ID);
    	$query = $this->db->update('Hotels', $data);
		if ($query){
			echo "Success";
			redirect(base_url().'main/index');
		} else echo "failed";
	}


	
	//-------------------------------------------------------------------login-logout-signup
	public function validate_credentials(){
		$this->load->model('model_users');

		if ($this->model_users->can_log_in()){
			return true;
		} else {
			$this->form_validation->set_message('validate_credentials', 'Incorrect user_name/password.');
			return false;
		}
	}

	public function login_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_name', 'User_name', 'required|trim|xss_clean|callback_validate_credentials');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');

		if($this->form_validation->run()) {
			$user_name = $this->input->post('user_name');
			$data = array (
				'user_name' => $this->input->post('user_name'),
				'is_logged_in' => 1,
				'priority' => $this->model_users->check_if_admin($user_name)
			);
			$this->session->set_userdata($data);
			redirect('main/index');
		} else {
			$this->load->view('login');
		}
	}

	public function signup_validation(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('cpassword', 'Comfirm Password', 'required|trim|matches[password]');

		if($this->form_validation->run() ){
			
			$this->load->model('model_users');
			$data = array (
			'user_name' => $this->input->post('user_name'),
			'password' => md5($this->input->post('password')),

			);
			if($this->model_users->add_user($data)){
			redirect('main/index');}

		} else {
			$this->load->view('signup');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('main/login');
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */