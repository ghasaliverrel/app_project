<?php

class Product extends CI_Controller{
	public function index(){
		$this->load->view('panels/productpanel_page');
	}

	public function restaurant(){
		$this->load->view('panels/restaurantlist_page');
	}

	public function order(){
		$this->load->view('forms/form_order');
	}
}