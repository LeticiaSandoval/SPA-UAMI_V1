<?php
class Principal_Libro extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("principal_libro_model");
	}
	
	public function index(){

		$Libros = $this->principal_libro_model->getLibros();

		$this->load->view("head/head2");
		$this->load->view("header/headerMenu");
		$this->load->view("formularios_libro/consultar_libro", compact("Libros"));
		$this->load->view("plantilla/footer2");


	}

	public function libro(){
		$Libros = $this->principal_libro_model->getLibros();

		$this->load->view("head/head2");
    	$this->load->view("header/headerMenu");
    	$this->load->view("formularios_libro/tabla_libro", compact("Libros"));
    	$this->load->view("plantilla/footer2");

	}
	public function guardarRegistro(){
		if ($this->input->post()){

			$título_del_libro=$this->db->escape($_POST["título_del_libro"]);
			$autores=$this->db->escape($_POST["autores"]);
			$autoresExternos=$this->db->escape($_POST["autoresExternos"]);
			$tipo=$this->db->escape($_POST["tipo"]);
			$estatus=$this->db->escape($_POST["estatus"]);
			$editorial=$this->db->escape($_POST["editorial"]);
			$editores=$this->db->escape($_POST["editores"]);
			$ISBN=$this->db->escape($_POST["ISBN"]);
			$año=$this->db->escape($_POST["año"]);
			$país=$this->db->escape($_POST["país"]);
			$páginas=$this->db->escape($_POST["páginas"]);
			$URL=$this->db->escape($_POST["URL"]);

			if($this->principal_libro_model->setLibro($título_del_libro, $autores, $autoresExternos, $tipo, $estatus, $editorial, $editores, (int)$ISBN, (int)$año, $país, (int)$páginas, $URL)){
				header("Location:".base_url()."principal_libro/libro");
			}
		}
	}

	public function editar_Libro($id_libro = null){
		if (!$id_libro == null) {

			$id_libro = $this->db->escape((int)$id_libro);

			$Libro = $this->principal_libro_model->getLibro($id_libro);

			$this->load->view("plantilla/head");
			$this->load->view("plantilla/header");
			$this->load->view("formularios_libro/editar_libro", compact("Libro"));
		}
		else{
			header("Location:".base_url()."principal_libro");
		}
	}

	public function actualizarLibro(){


		if ($this->input->post()) {

			$id_libro = $this->db->escape((int)$_POST["id_libro"]);
			$título_del_libro = $this->db->escape($_POST["título_del_libro"]);
			$autores = $this->db->escape($_POST["autores"]);
			$autoresExternos = $this->db->escape($_POST["autoresExternos"]);
			$tipo = $this->db->escape($_POST["tipo"]);
			$estatus = $this->db->escape($_POST["estatus"]);
			$editorial = $this->db->escape($_POST["editorial"]);
			$editores = $this->db->escape($_POST["editores"]);
			$ISBN = $this->db->escape($_POST["ISBN"]);
			$año = $this->db->escape($_POST["año"]);
			$país = $this->db->escape($_POST["país"]);
			$páginas = $this->db->escape($_POST["páginas"]);
			$URL = $this->db->escape($_POST["URL"]);

			if ($this->principal_libro_model->actualizarLibro($id_libro, $título_del_libro, $autores, $autoresExternos, $tipo, $estatus, $editorial, $editores, (int)$ISBN, (int)$año, $país, (int)$páginas, $URL)){

				header("Location:".base_url()."principal_libro/libro");	
			}
		}
	}

	public function eliminarLibro(int $id_libro){
		if ($this->principal_libro_model->eliminarLibro((int) $id_libro)) {
				header("Location:".base_url()."principal_libro/libro");
			}
	}
}
?>