<?php
/**
* 
*/
class Article_type_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	public function get_types($id=0)
	{
		if($id===0)
		{
			$query=$this->db->get('article_type');
			return $query->result_array();
		}
		$query=$this->db->get_where('article_type',array('id' =>$id));
		return $query->row_array();
	}
	public function set_news()
	{
		$this->load->helper('url');
		$data=array(
			'title'=>$this->input->post('title'),
			'text'=>$this->input->post('text')
			);
		return $this->db->insert('news',$data);
	}
}
?>