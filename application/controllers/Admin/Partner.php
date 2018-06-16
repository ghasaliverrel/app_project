<?php

class Partner extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('partner_model');
	}

	public function index(){
		$data['tenants']=$this->partner_model->get_tenant_only();
		$this->load->view('admin/partner_panel',$data);
	}

	public function add_partner(){
		$data['categories']=$this->partner_model->get_category_names();
		$this->load->view('admin/partner_form',$data);
	}

	public function modify_partner($id=NULL){
		if($id==NULL)
			redirect(base_url("admin/partner"));

		$data['tenants']=$this->partner_model->get_tenant(array("id_partner"=>$id));
		$data['categories']=$this->partner_model->get_category_names();
		$this->load->view("admin/partner_form",$data);
	}

	public function insert_data(){
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->form_validation->set_rules('partnerId','Partner ID','required');
		$this->form_validation->set_rules('partnerName','Partner Name','required');
		$this->form_validation->set_rules('partnerDescription','Partner Description','required');
		// $this->form_validation->set_rules('categoryName','Partner Category','required');
		$this->form_validation->set_rules('partnerAddress','Partner Address','required');
		$this->form_validation->set_rules('partnerPhone','Partner Phone','required');
		if($this->form_validation->run()){
			$data=array(
				"id_partner"=>$this->input->post("partnerId"),
				"name_partner"=>$this->input->post("partnerName"),
				"description_partner"=>$this->input->post("partnerDescription"),
				// "category_id"=>$this->input->post("categoryName"),
				"address_partner"=>$this->input->post("partnerAddress"),
				"phone_partner"=>$this->input->post("partnerPhone")
			);
			if($this->input->post("hidden_id")!=""){
				$this->partner_model->update_data($data,$this->input->post("hidden_id"));
				$this->session->set_flashdata('category_success', 'Category Updated Succesfully!');
				$this->modify_partner($this->input->post("hidden_id"));
			}else{
				$this->partner_model->insert_data($data);
				$this->session->set_flashdata('category_success', 'Category Inserted Successfully!');
				redirect('admin/partner');
			}
		}
		else{
			$data['id']=$this->input->post("partnerName");
			if($this->input->post("hidden_id")!=""){
				$this->modify_partner($this->input->post("hidden_id"));
			}
			else{
				$data['categories']=$this->partner_model->get_category_names();
				$this->load->view('admin/partner_form',$data);
			}
			// echo "error";
		}
	}

	public function delete_partner($id=NULL){
		$this->load->library("session");
		// $this->load->model("ads_model");
		// $check=$this->ads_model->check_app_exists($id);
		// if(empty($check)){
			$this->partner_model->delete_data($id);
		// }else{
		// 	$this->session->set_flashdata('category_fail', 'App still contains ad(s)');
		// }
		$this->load->library('user_agent');
		redirect($this->agent->referrer());
	}
}