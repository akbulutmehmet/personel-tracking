<?php

class Personel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Personel_model');
	}

	public function index () {
		$data = new stdClass();
		$data->personel = $this->Personel_model->personelList();

		$this->load->view('personelList',$data);
	}
	public function addPersonel () {
		$this->load->view('personelAdd');
	}
	public function add () {
		$data = [
			'name'=>$this->input->post('name'),
			'surname'=>$this->input->post('surname'),
			'email'=> $this->input->post('email'),
			'wage'=>$this->input->post('wage'),
			'isActive'=>$this->input->post('isActive')
		];
		$control = $this->Personel_model->insertPersonel($data);
		if($control) {
			redirect('personel');
		}
		else {
			echo "404 Page";
		}
	}
	public function updatePersonel () {
		$id = $this->uri->segment(3);
		$data->personel = $this->Personel_model->getPerson($id);
		$this->load->view('personelUpdate',$data);
	}
	public function update () {
		$data = [
			'id'=>$this->input->post('id'),
			'name'=>$this->input->post('name'),
			'surname'=>$this->input->post('surname'),
			'email'=>$this->input->post('email'),
			'wage'=>$this->input->post('wage'),
			'isActive'=>$this->input->post('isActive')
		];
		$control = $this->Personel_model->updatePerson($data);
		if ($control) {
			redirect('personel');
		}
		else {
			echo "404 Page";
		}

	}

	public function delete () {
		$id = $this->uri->segment(3);
		$control = $this->Personel_model->deletePersonel($id);
		if($control) {
			redirect('personel/index');
		}
		else {
			echo "404 Page";
		}
	}
}
