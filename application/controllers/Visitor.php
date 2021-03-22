<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Visitor_model');
	}

	public function index()
	{
		$this->load->view('visitorlist');
	}

	public function savevisitors(){
		$data = $this->Visitor_model->addvisitor();
		echo json_encode($data);
	}

	public function show(){
		$data = $this->Visitor_model->showlist();
		echo json_encode($data);
	}

	public function update(){
		$data = $this->Visitor_model->updateVisitor();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->Visitor_model->deleteVisitor();
		echo json_encode($data);
	}
	
}