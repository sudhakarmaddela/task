<?php 

class MyPerson_model extends CI_Model
{
	public function Myperson($fromArray)
	{
		$this->db->insert('person',$fromArray);
		return $id = $this->db->insert_id();
	}

	public function all()
	{
		$result = $this->db->order_by('person_id','DESC')->get('person')->result_array();
		return $result;
	}

	public function getRow($id)
	{
		$this->db->where('person_id',$id);
		$row = $this->db->get('person')->row_array();
		return $row;
	}
}