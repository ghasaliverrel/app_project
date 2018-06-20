<?php

class Menu extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
	}

	public function index(){
		$this->load->model('partner_model');
		$data['tenants']=$this->partner_model->get_tenant_only();
		$this->load->view('admin/menu_panel',$data);
	}

	public function add_menu(){
		$data['tenants']=$this->menu_model->get_tenant_names();
		$data['positions']=$this->menu_model->get_position_names();
		$this->load->view('admin/menu_form',$data);
	}

	public function modify_menu($id=NULL){
		if($id==NULL)
			redirect(base_url("admin/menu"));

		$data['menus']=$this->menu_model->get_menu(array("id_menu"=>$id));
		$data['tenants']=$this->menu_model->get_tenant_names();
		$data['positions']=$this->menu_model->get_position_names();
		$this->load->view("admin/menu_form",$data);
	}

	public function insert_data(){
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->form_validation->set_rules('menuName','Menu Name','required');
		$this->form_validation->set_rules('partnerName','Partner Name','required');
		$this->form_validation->set_rules('menuPosition','Menu Position','required');
		$this->form_validation->set_rules('menuPrice','Menu Price','required');
		if($this->form_validation->run()){
			$data=array(
				"name_menu"=>$this->input->post("menuName"),
				"partner_id"=>$this->input->post("partnerName"),
				"position_menu"=>$this->input->post("menuPosition"),
				"price_menu"=>$this->input->post("menuPrice")
			);
			if($this->input->post("hidden_id")!=""){
				$this->menu_model->update_data($data,$this->input->post("hidden_id"));
				$this->session->set_flashdata('category_success', 'Menu Updated Succesfully!');
				$this->modify_menu($this->input->post("hidden_id"));
			}else{
				$this->menu_model->insert_data($data);
				$this->session->set_flashdata('category_success', 'Menu Inserted Successfully!');
				redirect('admin/menu');
			}
		}else{
			$data['id']=$this->input->post("menuName");
			if($this->input->post("hidden_id")!=""){
				$this->modify_menu($this->input->post("hidden_id"));
			}
			else{
				$this->load->view('admin/menu_form',$data);
			}
		}
	}

	public function delete_menu($id=NULL){
		$this->load->library("session");
		// $this->load->model("partner_model");
		// $check=$this->partner_model->check_exists_data($id);
		// if(empty($check)){
			$this->menu_model->delete_data($id);
		// }else{
		// 	$this->session->set_flashdata('category_fail', 'App still contains ad(s)');
		// }
		$this->load->library('user_agent');
		redirect($this->agent->referrer());
	}

	public function view_menu(){
		$id=$this->input->post("partner_id");
		$data['menus']=$this->menu_model->get_menu(array("partner_id"=>$id));
		$this->load->view("admin/menu_tenant",$data);
	}
}