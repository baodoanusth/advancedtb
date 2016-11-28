<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function delete_hotel(){
		$Hotel_ID = $this->input->post('Hotel_ID');
		$this->db->where('Hotel_ID', $Hotel_ID);
		if ($this->db->delete('Hotels')){
			redirect('main/index');
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */