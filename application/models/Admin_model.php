<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
{

	class Admin_model extends CI_model
	{
		// Role
		public function add_role($fromArray)
		{
			$this->db->insert('roles',$fromArray);
		}

		public function roles_list()
		{
			return $rolesdata = $this->db->get('roles')->result_array();
		}


		// admin login check model
		public function admin_login($emailid,$password)
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('admin_email', $emailid);
			$this->db->where('admin_password', $password);
			$this->db->limit(1);
			$logindata = $this->db->get();
			$num = $logindata->num_rows();

			if ($num == 1) {
				
				$row = $logindata->row_array();

				$sess_user = array(
					"admin_id" => $row['admin_id'],
					"admin_name" => $row['admin_name'],
					"admin_email" => $row['admin_email'],
					"user_logged_in" => TRUE
				);
				$this->session->set_userdata($sess_user);

			} else {

				$sess_user = array(
					"admin_id" => '',
					"admin_name" => '',
					"admin_email" => '',
					"user_logged_in" => FALSE
				);
				$this->session->set_userdata($sess_user);
				
			}
			
		}

		// Admin
		public function add_admin($fromArray)
		{
			$this->db->insert('admin', $fromArray);
		}

		public function admins_list()
		{
			return $adminsdata = $this->db->get('admin')->result_array();
		}
	}
}
