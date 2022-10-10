<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editar extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("Persona_model");
    }

	public function index()
	{
		$data2['titulo'] = 'Editar';
		$this->load->view('plantillas/header', $data2); 
		$this->load->view('persona/editar');
		$this->load->view('plantillas/footer');
	}

	public function ediCI($ci)
	{
		$data2['titulo'] = 'Editar';
		$this->load->view('plantillas/header', $data2); 
		$data=$this->Persona_model->getPerson($ci);
		$this->load->view('persona/editar', $data);
		$this->load->view('plantillas/footer');
	}

	public function update($id)
	{
		$ci = $this->input->post("ci");
		$ncompleto = $this->input->post("ncompleto");
		$fnac = $this->input->post("fnac");
		$dep = $this->input->post("dep");
		
		$data = array(
			"ci"=>$ci,
			"nombre_completo"=>$ncompleto,
			"fecha_de_nacimiento"=>$fnac,
			"departamento"=>$dep
		);
		$this->Persona_model->update($data, $id);
		redirect(base_url()."index.php/Persona");
	}

}
