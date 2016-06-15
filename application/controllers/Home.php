<?php
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('article_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['article']=$this->article_model->get_article();
		$data['title']='Index';
		$this->load->view('templates/header',$data);
		$this->load->view('pages/home',$data);
		$this->load->view('templates/footer');
	}
}
?>