<?php
/**
* 
*/
class Admin extends CI_model
{
	
	function _construct()
	{
		parent::_construct();
		$this->db=$this->load->database();
	}


	public function isadmin($username,$password)
	{	
		$this->db->select('username','password');	
		$array = array('username' => $username, 
					   'password' => $password);
		$this->db->where($array);
		$query = $this->db->get('adminauth')->row_array();
		return $query;
		
	}

	public function getadminlist()
	{
		$this->db->select('username');
		$query = $this->db->get('adminauth');
		foreach ($query->result_array() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}

	public function addadmin($array)
	{
		$this->db->insert('adminauth',$array);
	}

	public function deleteadmin_formid($id='')
	{
		$this->db->where('id', $id);
		$this->db->delete('adminauth');
	}

	public function addadmininfo($array)
	{
		$this->db->insert('admininfo',$array);		
	}

	public function getadminifo_fromid($id='')
	{  		
		$this->db->where('user_id', $id);
		$query = $this->db->get('admininfo');
		foreach ($query->result_array() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}

}