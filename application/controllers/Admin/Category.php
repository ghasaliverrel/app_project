<?php

class Category extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
	}

	public function index(){
		$data['categories']=$this->category_model->get_category();
		$this->load->view('admin/category_panel',$data);
	}

	public function add_category(){
		$this->load->view('admin/category_form');
	}

	public function modify_category($id=NULL){
		if($id==NULL)
			redirect(base_url("admin/category"));

		$data['categories']=$this->category_model->get_category(array("id_category"=>$id));
		$this->load->view("admin/category_form",$data);
	}

	public function insert_data(){
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->form_validation->set_rules('categoryName','Category Name','required');
		$this->form_validation->set_rules('categoryDescription','Category Description','required');
		if($this->form_validation->run()){
			$data=array(
				"name"=>$this->input->post("categoryName"),
				"description_category"=>$this->input->post("categoryDescription")
			);
			if($this->input->post("hidden_id")!=""){
				$this->category_model->update_data($data,$this->input->post("hidden_id"));
				$this->session->set_flashdata('category_success', 'Category Updated Succesfully!');
				$this->modify_category($this->input->post("hidden_id"));
			}else{
				$this->category_model->insert_data($data);
				$this->session->set_flashdata('category_success', 'Category Inserted Successfully!');
				redirect('admin/category');
			}
		}else{
			$data['id']=$this->input->post("categoryName");
			if($this->input->post("hidden_id")!=""){
				$this->modify_category($this->input->post("hidden_id"));
			}
			else{
				$this->load->view('admin/category_form',$data);
			}
		}
	}

	public function delete_category($id=NULL){
		$this->load->library("session");
		// $this->load->model("partner_model");
		// $check=$this->partner_model->check_exists_data($id);
		// if(empty($check)){
			$this->category_model->delete_data($id);
		// }else{
		// 	$this->session->set_flashdata('category_fail', 'App still contains ad(s)');
		// }
		$this->load->library('user_agent');
		redirect($this->agent->referrer());
	}

	public function view_restaurant(){
		$id=$this->input->post("category_id");
		$data['tenants']=$this->category_model->get_tenant(array("category_id"=>$id));
		$this->load->view("admin/category_tenant",$data);
	}
}