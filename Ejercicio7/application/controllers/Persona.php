<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("Persona_model");
    }

	public function index()
	{
		$data = array("data"=>$this->Persona_model->getPersona());
		$data2['titulo'] = 'Personas';
		$this->load->view('plantillas/header', $data2); 
		$this->load->view('persona/persona', $data);
		$this->load->view('plantillas/footer');
	}

	public function delete($id)
	{
		$this->Persona_model->delete($id);
		redirect(base_url()."index.php/Persona");
	}

}
