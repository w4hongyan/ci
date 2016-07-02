<?php
/**
* 
*/
class Article extends AdminController
{
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('article_model');
		$this->load->model('article_type_model');
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
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title']='新建文章';
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('content','Content','required');
		if($this->form_validation->run()===FALSE)
		{
			$data['types']=$this->article_type_model->get_types();
			$this->load->view('templates/header',$data);
			$this->load->view('templates/article/create');
			$this->load->view('templates/footer');
			$this->load->view('templates/article/footerjs');
		}else
		{
			$this->article_model->set_article();
			redirect('article');
		}
	}
	public function edit($id=0)
	{
		$data['article_item']=$this->article_model->get_article($id);
		if(empty($data['article_item']))
		{
			show_404();
		}
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('content','Content','required');
		if($this->form_validation->run()===FALSE)
		{
			$data['types']=$this->article_type_model->get_types();
			$data['title']=$data['article_item']['title'];
			$this->load->view('templates/header',$data);
			$this->load->view('templates/article/edit',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/article/footerjs');
		}else
		{
			$this->article_model->set_article();
			redirect('article');
		}
	}
	public function delete($id=0)
	{
		echo $this->article_model->delete_article($id);
	}
}
?>