<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyPerson extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('MyPerson_model');
		$rows = $this->MyPerson_model->all();
		$data['rows'] = $rows;
		$this->load->view('personlist',$data);
	}

	public function createform()
	{
		$html = $this->load->view('addperson','',true);
		$response['html'] = $html;
		echo json_encode($response);
	}

	public function saveperson()
	{
		$this->load->model('MyPerson_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('person_name', 'Person Name','required');
		$this->form_validation->set_rules('person_message', 'message','required');
		$this->form_validation->set_rules('person_age', 'Age','required');

		if ($this->form_validation->run() == TRUE) {

			$fromArray = array();
			$fromArray['person_name'] = $this->input->post('person_name');
			$fromArray['person_message'] = $this->input->post('person_message');
			$fromArray['person_age'] = $this->input->post('person_message');
			$fromArray['created_at'] = date('Y-m-d H:i:s');
			$id = $this->MyPerson_model->Myperson($fromArray);


			$row = $this->MyPerson_model->getRow($id);
			$vData['row'] = $row;
			$rowHtml = $this->load->view('personrow',$vData,true);


			$response['row'] = $rowHtml;
			$response['status'] = 1;
			$response['message'] = "<div class=\"alert alert-success\">Record Added Successfully.</div>";

		} else {

			$response['status'] = 0;
			$response['person_name'] = strip_tags(form_error('person_name'));
			$response['person_message'] = strip_tags(form_error('person_message'));
			$response['person_age'] = strip_tags(form_error('person_age'));

		}
			echo json_encode($response);
	}
	
}