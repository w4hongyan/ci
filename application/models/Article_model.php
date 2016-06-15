<?php
/**
* 
*/
class Article_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	public function get_article($id=0)
	{
		if($id===0)
		{
			$this->db->order_by('createTime','DESC');
			$query=$this->db->get('article');
			return $query->result_array();
		}
		$query=$this->db->get_where('article',array('id' =>$id));
		return $query->row_array();
	}

}
?>