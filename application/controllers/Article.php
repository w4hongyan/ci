<?php
/**
* 
*/
class Article extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['article']=$this->article_model->get_article();
		$data['title']='文章列表';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/article/index',$data);
		$this->load->view('templates/footer');
	}
	public function view($id=0)
	{
		$data['article_item']=$this->article_model->get_article($id);
		if(empty($data['article_item']))
		{
			show_404();
		}
		$data['title']=$data['article_item']['title'];
		$this->load->view('templates/header',$data);
		$this->load->view('templates/article/view',$data);
		$this->load->view('templates/footer');
	}
	
}
?>