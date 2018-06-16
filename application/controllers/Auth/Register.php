<?php
class Register extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index(){
		$this->load->view('auth/register_page');
	}

	public function signup(){
		$data['id_user'] = $this->auth_model->getMaxUserId();
		$id = $data['id_user'][0]['max_id'];
		$new_id = "U".sprintf("%03s",$id);

		$data=array(
			"id_user"=>$new_id,
			"role_id"=>'1',
			"name"=>$this->input->post('name'),
			"phone"=>$this->input->post('phone'),
			"email"=>$this->input->post('email'),
			"username"=>$this->input->post('username'),
			"password"=>$this->input->post('password')
		);
             
        $register = $this->auth_model->register($data);

        $this->session->set_userdata($data);
		redirect('panels/products');    

		// if ($register == 1) {
		// 	$this->session->set_userdata('phoneNumber', $phone);
		// 	redirect('Otp');
  //       }else{
  //       	$this->session->set_flashdata('error', "Terjadi kesalahan pada server");
  //       	redirect('Register');
  //       }
	}
}