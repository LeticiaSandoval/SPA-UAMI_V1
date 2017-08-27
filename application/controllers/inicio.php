<?php
class Inicio extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}
	public function index()
	{   
		$this->session->sess_destroy();
		$data ['titulo' ] = 'INI' ;
		$this->load->view("plantilla/head", $data);
		$this->load->view("plantilla/header");
		$this->load->view("inicio");
		$this->load->view("plantilla/footer");

	}
	public function iniciarSesion()
	{
		$data ['titulo' ] = 'INI' ;
		$this->load->view("plantilla/head", $data);
		$this->load->view("plantilla/header");
		$this->load->view("login");
		$this->load->view("plantilla/footer");

	}

}
?>