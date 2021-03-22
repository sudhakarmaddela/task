<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('EmpModel');
	}

	public function index()
	{
		$this->load->view('employee');
	}

	public function saveemployee()
	{
		$data = $this->EmpModel->saveEmp();
		echo jason_encode($data);
	}

	public function show()
	{
		$data = $this->EmpModel->employeeList();
		echo json_encode($data);
	}

	function update()
	{
		$data = $this->EmpModel->updateEmp();
		echo json_encode($data);
	}
	
}