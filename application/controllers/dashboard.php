<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		if($this->session->userdata('user_logged_in') != TRUE)
		{
			redirect('admin');
		}
		$this->load->model('Dashboard_model');
	}
	public function index()
	{
		$this->load->view('admin_dashboard');
	}
}
