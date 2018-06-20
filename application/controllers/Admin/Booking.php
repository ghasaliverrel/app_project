<?php

class Booking extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('booking_model');
	}

	public function index(){
		$data['bookings']=$this->booking_model->get_booking();
		$this->load->view('admin/booking_panel',$data);
	}

	public function add_booking(){
		$data['tenants']=$this->booking_model->get_partner_names();
		$data['customers']=$this->booking_model->get_user_names();
		$this->load->view('admin/booking_form',$data);
	}

	public function modify_booking($id=NULL){
		if($id==NULL)
			redirect(base_url("admin/booking"));

		$data['tenants']=$this->booking_model->get_partner_names();
		$data['bookings']=$this->booking_model->get_booking(array("id_booking"=>$id));
		$this->load->view("admin/booking_form",$data);
	}

	public function insert_data(){
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->form_validation->set_rules('bookingName','Booking Name','required');
		$this->form_validation->set_rules('partnerName','Tenant Name','required');
		$this->form_validation->set_rules('bookingDate','Booking Date','required');
		$this->form_validation->set_rules('bookingCount','Amount of People','required');
		if($this->form_validation->run()){
			if($this->input->post("hidden_id")!=""){
				$id=$this->input->post("hidden_id");
				$data['bookings']=$this->booking_model->get_booking(array("id_booking"=>$id));
				$data=array(
					"user_id"=>$data['bookings'][0]->user_id,
					"partner_id"=>$this->input->post("partnerName"),
					"booking_time"=>$this->input->post("bookingDate"),
					"booking_count"=>$this->input->post("bookingCount")
				);

				$this->booking_model->update_data($data,$this->input->post("hidden_id"));
				$this->session->set_flashdata('category_success', 'Booking Updated Succesfully!');
				$this->modify_booking($this->input->post("hidden_id"));
			}else{
				$data=array(
					"user_id"=>$this->input->post("bookingName"),
					"partner_id"=>$this->input->post("partnerName"),
					"booking_time"=>$this->input->post("bookingDate"),
					"booking_count"=>$this->input->post("bookingCount")
				);
				$this->booking_model->insert_data($data);
				$this->session->set_flashdata('category_success', 'Booking Inserted Successfully!');
				redirect('admin/booking');
			}
		}
		else{
			$data['id']=$this->input->post("bookingName");
			if($this->input->post("hidden_id")!=""){
				$this->modify_booking($this->input->post("hidden_id"));
			}
			else{
				$data['tenants']=$this->booking_model->get_partner_names();
				$data['bookings']=$this->booking_model->get_booking(array("id_booking"=>$id));
				$this->load->view("admin/booking_form",$data);
			}
		}
	}

	public function delete_booking($id=NULL){
		$this->load->library("session");
		// $this->load->model("ads_model");
		// $check=$this->ads_model->check_app_exists($id);
		// if(empty($check)){
			$this->booking_model->delete_data($id);
		// }else{
		// 	$this->session->set_flashdata('category_fail', 'App still contains ad(s)');
		// }
		$this->load->library('user_agent');
		redirect($this->agent->referrer());
	}
}