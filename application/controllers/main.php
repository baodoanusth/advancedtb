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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */