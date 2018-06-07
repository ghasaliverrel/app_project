<?php

class Product extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
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

	public function order(){
		$this->load->view('forms/form_order');
	}
}