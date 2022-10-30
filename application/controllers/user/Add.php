<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
	}

	public function index()
	{
		$this->load->view('user/add');
	}

	public function save(){
		$fullName = $this->input->post("fullName");
		$lastName = $this->input->post("lastName");
		$email = $this->input->post("email");
		$gender_user = $this->input->post("gender_user");
		$gender_phone = $this->input->post("gender_phone");
		$gender_age = $this->input->post("gender_age");

		$this->form_validation->set_rules('fullName', 'Nombre', 'required|min_length[3]');
		$this->form_validation->set_rules('lastName', 'Apellido', 'required|min_length[3]');
		$this->form_validation->set_rules('email', 'Correo eléctronico', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('gender_user', 'Genero', 'required|min_length[3]');
		$this->form_validation->set_rules('gender_phone', 'Telefóno', 'required|min_length[3]');
		$this->form_validation->set_rules('gender_age', 'Edad', 'required|min_length[1]');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/add');
		}else{
			$data = array(
				"FIRTS_NAME"=>$fullName,
				"LAST_NAME"=>$lastName,
				"EMAIL"=>$email,
				"GENDER"=>$gender_user,
				"TELEPHONE"=>$gender_phone,
				"AGE"=>$gender_age
			);
			
			$this->User_model->save($data);
			$this->session->set_flashdata('success', 'Usuario registrado con éxito!');
			redirect(base_url()."usuarios");
		}
	}
}
