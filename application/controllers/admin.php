<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->load->view('adminlogin');
	}

	public function adminlogincheck()
	{
		if($this->input->post('admin_email'))
		{
			$emailid = $this->input->post('admin_email');
			$password = $this->input->post('admin_password');

			$this->Admin_model->admin_login($emailid,$password);

			if ($this->session->userdata('user_logged_in') == TRUE) {

				$this->session->set_flashdata('success','Login Successful');
				redirect('dashboard');

			} else {

				$this->session->set_flashdata('danger','Invalid Login Details');
				redirect('Admin');

			}
			
		}
		$this->load->view('adminlogin');
	}

	public function logout()
	{
		session_destroy();
		redirect('admin');
	}

	public function addadmin()
	{
		$this->form_validation->set_rules('admin_name','Admin Name','required');
		if ($this->form_validation->run() == FALSE) 
		{

			$data['rolesdata'] = $this->Admin_model->roles_list();
			$this->load->view('addnewadmin',$data);

		}
		else
		{
			$fromArray = array(
				'admin_name' => $this->input->post('admin_name'),
				'admin_email' => $this->input->post('admin_email'),
				'admin_password' => $this->input->post('admin_password'),
				'admin_mobileno' => $this->input->post('admin_mobileno'),
				'admin_address' => $this->input->post('admin_address'),
				'role_name' => $this->input->post('role_name'),
				'is_active' => $this->input->post('is_active')
			);

				$this->Admin_model->add_admin($fromArray);
				$this->session->set_flashdata('success', 'Record Added Successfull.');
				//echo "<pre>"; print_r($fromArray); die();
				redirect(base_url().'Admin/addadmin');
		}
	}

	public function adminlist()
	{
		$adminsdata = $this->Admin_model->admins_list();
		$data = array();
		$data['adminsdata'] = $adminsdata;
		$this->load->view('adminlist',$data);
	}

	/****************************************** Role **************************************************/
	public function addrole()
	{
		$this->form_validation->set_rules('role_name','Role Name','Required');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('addnewroles');
		} 
		else 
		{
			$fromArray = array(
				'role_name' => $this->input->post('role_name'),
				'is_active' => $this->input->post('is_active')
			);
				$this->Admin_model->add_role($fromArray);
				$this->session->set_flashdata('success', 'Role Added Successfull.');
				redirect(base_url().'admin/addrole');
		}
		
	}

	public function roleslist()
	{
		$rolesdata = $this->Admin_model->roles_list();
		$data = array();
		$data['rolesdata'] = $rolesdata;
		$this->load->view('roleslist', $data);
	}
}
