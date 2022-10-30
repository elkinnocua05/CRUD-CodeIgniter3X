<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
	}

	public function index($id)
	{   
        $data=$this->User_model->getUser($id);
		$this->load->view('user/edit',$data);
	}

	public function update($id){
		$fullName = $this->input->post("fullName");
		$lastName = $this->input->post("lastName");
		$email = $this->input->post("email");
		$gender_user = $this->input->post("gender_user");
		$gender_phone = $this->input->post("gender_phone");
		$gender_age = $this->input->post("gender_age");
        
        $data=$this->User_model->getUser($id);

        $validateEMail="";
        
        

		$this->form_validation->set_rules('fullName', 'Nombre', 'required|min_length[3]');
		$this->form_validation->set_rules('lastName', 'Apellido', 'required|min_length[3]');
		$this->form_validation->set_rules('email', 'Correo eléctronico', 'required|min_length[3]');
		$this->form_validation->set_rules('gender_user', 'Genero', 'required|min_length[3]');
		$this->form_validation->set_rules('gender_phone', 'Telefóno', 'required|min_length[3]');
		$this->form_validation->set_rules('gender_age', 'Edad', 'required|min_length[1]');

		if ($this->form_validation->run() == FALSE){
			$this->index($id);
		}else{
			$data = array(
				"FIRTS_NAME"=>$fullName,
				"LAST_NAME"=>$lastName,
				"EMAIL"=>$email,
				"GENDER"=>$gender_user,
				"TELEPHONE"=>$gender_phone,
				"AGE"=>$gender_age
			);
			
			$this->User_model->update($data,$id);
			$this->session->set_flashdata('success', 'Usuario actualizado con éxito!');
			redirect(base_url()."usuarios");
		}
	}
}
