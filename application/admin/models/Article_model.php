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
			$sql='select article.*,article_type.name as type_name from article join article_type on article.typeId=article_type.id order by article.createTime desc';
			$query=$this->db->query($sql);
			return $query->result_array();
		}
		$query=$this->db->get_where('article',array('id' =>$id));
		return $query->row_array();
	}
	public function set_article()
	{
		$this->load->helper('url');
		$id=$this->input->post('id');
		$data=array(
				'title'=>$this->input->post('title'),
				'content'=>$this->input->post('content'),
				'typeId'=>$this->input->post('typeId')

				);
		if($id=='0'){
			$data['createtime']=date("Y-m-d H:i:s",time());
			return $this->db->insert('article',$data);
		}else{
			
			return $this->db->update('article',$data,array('id'=>$this->input->post('id')));
		}
	}
	public function delete_article($id=0)
	{
		$this->db->delete('article',array('id' =>$id)); 
		return $this->db->affected_rows();
	}
}
?>