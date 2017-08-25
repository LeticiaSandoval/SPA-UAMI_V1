<?php
class Inicio extends CI_Controller
{
	public function index()
	{   
		$data ['titulo' ] = 'INICIO' ;
		$this->load->view("plantilla/header", $data);
		$this->load->view("inicio");
		$this->load->view("plantilla/footer");
	}

}
?>