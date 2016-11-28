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
	public function edit_staff(){
		$this->load->view('edit_staff');
	}
	public function edit_guest(){
		$this->load->view('edit_guest');
	}
	public function edit_room(){
		$this->load->view('edit_room');
	}
	public function edit_membership(){
		$this->load->view('edit_membership');
	}
	public function edit_booking(){
		$this->load->view('edit_booking');
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

	public function edit_staff_form(){
		$Employee_ID = $this->input->post('Employee_ID');
		$data = array(
			'Hotel_ID' => $this->input->post('Hotel_ID'),
			'Employee_Name' => $this->input->post('Employee_Name'),
			'Employee_Position' => $this->input->post('Employee_Position'),
			'Employee_DOB' => $this->input->post('Employee_DOB'),
			'Hotel_address' => $this->input->post('Hotel_adr'),
			'Employee_Salary' => $this->input->post('Employee_Salary')
			);
		$data = array_filter($data);
		$this->db->where('Employee_ID', $Employee_ID);
    	$query = $this->db->update('Staff', $data);
		if ($query){
			echo "Success";
			redirect(base_url().'main/manage_staff');
		} else echo "failed";
	}

	public function edit_guest_form(){
		$Guest_ID = $this->input->post('Guest_ID');
		$data = array(
			'Guest_Name' => $this->input->post('Guest_Name'),
			'Guest_Tel' => $this->input->post('Guest_Tel'),
			'Guest_Address' => $this->input->post('Guest_Address'),
			'Guest_Nationality' => $this->input->post('Guest_Nationality'),
			'Guest_PassportNumber' => $this->input->post('Guest_Passport')
			);
		$data = array_filter($data);
		$this->db->where('Guest_ID', $Guest_ID);
    	$query = $this->db->update('Guests', $data);
		if ($query){
			echo "Success";
			redirect(base_url().'main/manage_guests');
		} else echo "failed";
	}

	public function edit_room_form(){
		$Room_Number = $this->input->post('Room_Number');
		$data = array(
			'Hotel_ID' => $this->input->post('Hotel_ID'),
			'Room_Floor' => $this->input->post('Room_Floor'),
			'Room_Name' => $this->input->post('Room_Name')
			);
		$data = array_filter($data);
		$this->db->where('Room_Number', $Room_Number);
    	$query = $this->db->update('Rooms', $data);
		if ($query){
			echo "Success";
			redirect(base_url().'main/manage_rooms');
		} else echo "failed";
	}
	public function edit_membership_form(){
		$Guest_ID = $this->input->post('Guest_ID');
		$data = array(
			'Card_ID' => $this->input->post('Card_ID'),
			'Points' => $this->input->post('Points'),
			'VIP' => $this->input->post('VIP')
			);
		$data = array_filter($data);
		$this->db->where('Guest_ID', $Guest_ID);
    	$query = $this->db->update('Membership', $data);
		if ($query){
			echo "Success";
			redirect(base_url().'main/manage_membership');
		} else echo "failed";
	}
	public function edit_booking_form(){
		$Booking_ID = $this->input->post('Booking_ID');
		$data = array(
			'guest_id' => $this->input->post('guest_id'),
			'Employee_ID' => $this->input->post('Employee_ID')
			);
		$data = array_filter($data);
		$this->db->where('Booking_ID', $Booking_ID);
    	$query = $this->db->update('Bookings', $data);
		$data1 = array(
			'Date_From' => $this->input->post('Date_From'),
			'Date_To' => $this->input->post('Date_To'),
			'Room_Number' => $this->input->post('Room_Number'),
			'Hotel_ID' => $this->input->post('Hotel_ID'),
			);
		$data1 = array_filter($data1);
    	$this->db->where('Booking_ID', $Booking_ID);
    	$query1 = $this->db->update('Booking_Details', $data1);
			redirect(base_url().'main/manage_bookings');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */