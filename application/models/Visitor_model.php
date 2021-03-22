<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
{

	class Visitor_model extends CI_model
	{
		// Role
		public function addvisitor()
		{
			$data = array(
				'visitor_name' => $this->input->post('visitor_name'),
				'visitor_mobileno' => $this->input->post('visitor_mobileno'),
				'visitor_address' => $this->input->post('visitor_address')
			);
			$result = $this->db->insert('visitor',$data);
			return $result;
		}

		public function showlist()
		{
			$this->db->order_by('id','DESC');
			$hasil = $this->db->get('visitor');
			return $hasil->result();
		}

		public function updateVisitor()
		{

		}
	}
}
