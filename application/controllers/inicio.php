<?php
class Inicio extends CI_Controller
{
	public function index()
	{   
		$data ['titulo' ] = 'INICIO' ;
		$this->load->view("plantilla/head", $data);
		$this->load->view("principal");
		$this->load->view("plantilla/footer");

	}

}
?>