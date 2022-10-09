<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facultad extends CI_Controller {
    public function index()
	{
		$data['titulo'] = 'Facultad de Ciencias Puras y Naturales';
		$data2['pag'] = 'INI';
		$this->load->view('plantillas/head', $data);
		$this->load->view('plantillas/menu', $data2);
		$this->load->view('facultad/index');
		$this->load->view('plantillas/footer');
	}
	public function informatica()
	{
        $data['titulo'] = 'Carrera de Informática';
		$data2['pag'] = 'I';
		$this->load->view('plantillas/head', $data);
		$this->load->view('plantillas/menu', $data2);
		$this->load->view('facultad/inf/index');
		$this->load->view('plantillas/footer');
	}
	public function fisica()
	{
		$data['titulo'] = 'Carrera de Física';
		$data2['pag'] = 'F';
		$this->load->view('plantillas/head', $data);
		$this->load->view('plantillas/menu', $data2);
		$this->load->view('facultad/fis/index');
		$this->load->view('plantillas/footer');
	}
	public function matematica()
	{
		$data['titulo'] = 'Carrera de Matemática';
		$data2['pag'] = 'M';
		$this->load->view('plantillas/head', $data);
		$this->load->view('plantillas/menu', $data2);
		$this->load->view('facultad/mat/index');
		$this->load->view('plantillas/footer');
	}
}
