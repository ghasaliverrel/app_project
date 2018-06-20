<?php

class Product extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id_user')===null){
			redirect('auth/login');
		}
		$this->load->model('partner_model');
	}

	public function index(){
		$data['categories']=$this->partner_model->get_category();
		$this->load->view('panels/productpanel_page',$data);
	}

	public function view_restaurant($id=NULL){
		$data['tenants']=$this->partner_model->get_tenant(array("category_id"=>$id));
		$this->load->view('panels/restaurantlist_page',$data);
	}

	public function view_spesific($id=NULL){
		$data['tenants_left']=$this->partner_model->get_tenant_menu_odd(array("id_partner"=>$id));
		$data['tenants_right']=$this->partner_model->get_tenant_menu_even(array("id_partner"=>$id));
		$data['categories']=$this->partner_model->get_tenant(array("partner_id"=>$id));
		$this->load->view('panels/overviewrestaurant_page',$data);
	}

	public function view_revieworder($id=NULL){
		$this->load->view('panels/overviewbooking_page');
	}

	public function order($id=NULL){
		$data['tenants']=$this->partner_model->get_tenant_only(array("id_partner"=>$id));
		$data['positions']=$this->partner_model->get_position_names();
		$this->load->view('forms/form_order',$data);
	}

	public function insert_order($id=NULL){
		$this->load->model('booking_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->form_validation->set_rules('bookingDate','Booking Date','required');
		$this->form_validation->set_rules('bookingTime','Booking Time','required');
		$this->form_validation->set_rules('bookingCount','Amount of People','required');
		if($this->form_validation->run()){
			$data['tenants']=$this->partner_model->get_tenant_only(array("id_partner"=>$id));
			$data=array(
				"user_id"=>$this->session->userdata('id_user'),
				"partner_id"=>$data['tenants'][0]->id_partner,
				"booking_date"=>$this->input->post("bookingDate"),
				"booking_time"=>$this->input->post("bookingTime"),
				"booking_count"=>$this->input->post("bookingCount"),
				"booking_position_menu"=>$this->input->post("positionName")
			);

			$this->booking_model->insert_data($data);

			$data['bookings']=$this->booking_model->get_last_booking();
			$id_booking=$data['bookings'][0]->id_booking;
			$data_result['overviews']=$this->booking_model->get_booking(array("id_booking"=>$id_booking));
			$data_result['menus']=$this->booking_model->get_booking_menu(array("id_booking"=>$id_booking, "position_menu"=>$this->input->post("positionName")));
			// $message = "Your Table Reservation at".$data_result['overviews'][0]->name_partner."has been confirmed. Please arrive at date and time according to your booking choices.";
			// $this->send_mail($data_result['overviews'][0]->email,"Your Table Reservation",$message);
			$this->load->view('panels/overviewbooking_page',$data_result);
		}
		else{
			$this->load->library('user_agent');
			redirect($this->agent->referrer());
		}
	}

	private function send_mail($to,$subject,$message){
		$this->load->library('email');
		$this->email->from('vghasali@gmail.com', 'Admin FoodStep');
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
	}
}