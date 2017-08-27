<?php
class Inicio extends CI_Controller
{
	public function index()
	{   
		$data ['titulo' ] = 'INI' ;
		$this->load->view("plantilla/head", $data);
		$this->load->view("inicio");
		$this->load->view("plantilla/footer");

	}

}
?>