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
		$this->load->view("formularios_libro/consultar_libro", compact("Libros"));
	}

	public function guardarRegistro(){
		if ($this->input->post()){

			$titulo_articulo=$this->db->escape($_POST["titulo_articulo"]);
			$autores=$this->db->escape($_POST["autores"]);
			$autoresExternos=$this->db->escape($_POST["autoresExternos"]);
			$título_del_libro=$this->db->escape($_POST["título_del_libro"]);
			$núm_del_capítulo=$this->db->escape($_POST["núm_del_capítulo"]);
			$editores=$this->db->escape($_POST["editores"]);
			$editorial=$this->db->escape($_POST["editorial"]);
			$ISBN=$this->db->escape($_POST["ISBN"]);
			$año=$this->db->escape($_POST["año"]);
			$país=$this->db->escape($_POST["país"]);
			$pág_ini=$this->db->escape($_POST["pág_ini"]);
			$pág_fin=$this->db->escape($_POST["pág_fin"]);

			if($this->principal_libro_model->setLibro($titulo_articulo, $autores, $autoresExternos, $título_del_libro, (int)$núm_del_capítulo, $editores, $editorial, (int)$ISBN, (int)$año, $país, (int)$pág_ini, (int)$pág_fin)){
				header("Location:".base_url()."principal_libro");
			}
		}
	}

	public function editar_Libro($id_artLibCapítulo = null){
		if (!$id_artLibCapítulo == null) {

			$id_artLibCapítulo = $this->db->escape((int)$id_artLibCapítulo);

			$Libro = $this->principal_libro_model->getLibro($id_artLibCapítulo);

			$this->load->view("formularios_libro/editar_libro", compact("Libro"));
		}
		else{
			header("Location:".base_url()."principal_libro");
		}
	}

	public function actualizarLibro(){
		if ($this->input->post()) {

			$id_artLibCapítulo = $this->db->escape((int)$_POST["id_artLibCapítulo"]);
			$titulo_articulo = $this->db->escape($_POST["titulo_articulo"]);
			$autores = $this->db->escape($_POST["autores"]);
			$autoresExternos = $this->db->escape($_POST["autoresExternos"]);
			$título_del_libro = $this->db->escape($_POST["título_del_libro"]);
			$núm_del_capítulo = $this->db->escape($_POST["núm_del_capítulo"]);
			$editores = $this->db->escape($_POST["editores"]);
			$editorial = $this->db->escape($_POST["editorial"]);
			$ISBN = $this->db->escape($_POST["ISBN"]);
			$año = $this->db->escape($_POST["año"]);
			$país = $this->db->escape($_POST["país"]);
			$pág_ini = $this->db->escape($_POST["pág_ini"]);
			$pág_fin = $this->db->escape($_POST["pág_fin"]);

			if ($this->principal_libro_model->actualizarLibro($id_artLibCapítulo, $titulo_articulo, $autores, $autoresExternos, $título_del_libro, (int)$núm_del_capítulo, $editores, $editorial, (int)$ISBN, (int)$año, $país, (int)$pág_ini, (int)$pág_fin)){

				header("Location:".base_url()."principal_libro");	
			}
		}
	}

	public function eliminarLibro(int $id_artLibCapítulo){
		if ($this->principal_libro_model->eliminarLibro((int) $id_artLibCapítulo)) {
				header("Location:".base_url()."principal_libro");
			}
		}
}
?>