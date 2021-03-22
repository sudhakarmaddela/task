<?php 

class EmpModel extends CI_Model
{
	public function saveEmp()
	{
		$data = array(
			
			'emp_name' => $this->input->post('emp_name'),
			'emp_age' => $this->input->post('emp_age'),
			'emp_designation' => $this->input->post('emp_designation')
		);
		$result = $this->db->insert('employee',$data);
		return $result;
	}

	public function employeeList()
	{
		$elist = $this->db->get('employee');
		return $elist->result();
	}

	public function updateEmp()
	{
		$id=$this->input->post('id');
		$emp_name = $this->input->post('emp_name');
		$emp_age = $this->input->post('emp_age');
		$emp_designation = $this->input->post('emp_designation');

		$this->db->set('emp_name',$emp_name);
		$this->db->set('emp_age',$emp_age);
		$this->db->set('emp_designation',$emp_designation);
		$this->db->where('id',$id);
		$result = $this->db->update('employee');
		return $result;
	}
}