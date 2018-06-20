<?php
class Login extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index($msg = NULL){
		$data['msg'] = $msg;
		$this->load->view('auth/login_page',$data);
	}

	public function signin(){
		$username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
		$result=$this->auth_model->validate($username,$password);
		if($result==0){
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}else{
			redirect('panels/product');
		}
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}