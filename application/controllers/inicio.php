<?php
class Inicio extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}
	public function index()
	{   
		$this->session->sess_destroy();
		$this->load->view("plantilla/head");
		$this->load->view("plantilla/header");
		$this->load->view("inicio");
		$this->load->view("plantilla/footer");
		

		

	}
	public function iniciarSesion()
	{
		$this->load->view("plantilla/head");
		$this->load->view("plantilla/header");
		$this->load->view("login");
		$this->load->view("plantilla/footer");

	}
    
    public function ini()
    {
		$this->load->view("plantilla/head");
		$this->load->view("header/headerPerfil");
		$this->load->view("secundario");
		$this->load->view("plantilla/footer2");

		
    }

}
?>