<?php

class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index(){
		$data['users']=$this->user_model->get_user();
		$this->load->view('admin/user_panel',$data);
	}

	public function add_user(){
		$data['roles']=$this->user_model->get_roles();
		$this->load->view('admin/user_form',$data);
	}

	public function modify_user($id=NULL){
		if($id==NULL)
			redirect(base_url("admin/user"));

		$data['users']=$this->user_model->get_user(array("id_user"=>$id));
		$data['roles']=$this->user_model->get_roles();
		$this->load->view("admin/user_form",$data);
	}

	public function insert_data(){
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->form_validation->set_rules('userId','User ID','required');
		$this->form_validation->set_rules('userName','User Full Name','required');
		$this->form_validation->set_rules('userRole','User Role','required');
		$this->form_validation->set_rules('userAddress','User Address','required');
		$this->form_validation->set_rules('userPhone','User Phone','required');
		$this->form_validation->set_rules('userEmail','User Email','required');
		$this->form_validation->set_rules('username','Username','required');
		if($this->form_validation->run()){
			$data=array(
				"id_user"=>$this->input->post("userId"),
				"name"=>$this->input->post("userName"),
				"role_id"=>$this->input->post("userRole"),
				"address"=>$this->input->post("userAddress"),
				"phone"=>$this->input->post("userPhone"),
				"email"=>$this->input->post("userEmail"),
				"username"=>$this->input->post("username"),
			);
			if($this->input->post("hidden_id")!=""){
				$this->user_model->update_data($data,$this->input->post("hidden_id"));
				$this->session->set_flashdata('category_success', 'User Updated Succesfully!');
				$this->modify_user($this->input->post("hidden_id"));
			}else{
				$this->user_model->insert_data($data);
				$this->session->set_flashdata('category_success', 'User Inserted Successfully!');
				redirect('admin/user');
			}
		}
		else{
			$data['id']=$this->input->post("userName");
			if($this->input->post("hidden_id")!=""){
				$this->modify_user($this->input->post("hidden_id"));
			}
			else{
				$data['roles']=$this->user_model->get_roles();
				$this->load->view('admin/user_form',$data);
			}
		}
	}
}