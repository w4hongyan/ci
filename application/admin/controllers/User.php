<?php
class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	public function login()
	{
		$data['title']='登录';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','用户名：','required');
		$this->form_validation->set_rules('pwd','密码','required');
		if($this->form_validation->run()===FALSE)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('templates/user/login',$data);
			$this->load->view('templates/footer');
		}else
		{
			$name=$this->input->post('name');
			$pwd=$this->input->post('pwd');
			if($this->user_model->login($name,$pwd)){
				$this->session->loginuser=$name;
			redirect('article');
			}else{
				$this->load->view('templates/user/loginfail');
			}
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('loginuser');
		redirect('');
	}
}
?>