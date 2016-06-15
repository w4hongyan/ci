<?php
/**
* 
*/
class User_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	public function get_user($id=0)
	{
		if($id===0)
		{
			$query=$this->db->get('user');
			return $query->result_array();
		}
		$query=$this->db->get_where('user',array('id' =>$id));
		return $query->row_array();
	}
	public function login()
	{

		$name=$this->input->post('name');
		$pwd=$this->input->post('pwd');
	    $query=$this->db->get_where('user',array('name' =>$name,'pwd'=>md5($pwd)));
		return count($query->result());
	}
}
?>