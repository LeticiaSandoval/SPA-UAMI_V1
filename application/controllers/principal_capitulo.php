<?php
class Principal_Capitulo extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("principal_capitulo_model");
	}
	
	public function index(){

		$Capitulos = $this->principal_capitulo_model->getCapitulos();

		$this->load->view("head/head2");
		$this->load->view("header/headerMenu");
		$this->load->view("formularios_capitulo/registrar_capitulo", compact("Capitulos"));
		$this->load->view("plantilla/footer2");


	}

	public function capitulo(){
		$Capitulos = $this->principal_capitulo_model->getCapitulos();

		$this->load->view("head/head2");
    	$this->load->view("header/headerMenu");
    	$this->load->view("formularios_capitulo/tabla_capitulo", compact("Capitulos"));
    	$this->load->view("plantilla/footer2");

	}
	public function guardarRegistroCapitulo(){
		if ($this->input->post()){
			print_r($_POST);

			$titulo_capitulo=$this->db->escape($_POST["titulo_capitulo"]);
			$autores=$this->db->escape($_POST["autores"]);
			$autoresExternos=$this->db->escape($_POST["autoresExternos"]);
			$tipo=$this->db->escape($_POST["tipo"]);
			$estatus=$this->db->escape($_POST["estatus"]);
			$título_del_libro=$this->db->escape($_POST["título_del_libro"]);
			$núm_del_capítulo=$this->db->escape((int)$_POST["núm_del_capítulo"]);
			$editores=$this->db->escape($_POST["editores"]);
			$editorial=$this->db->escape($_POST["editorial"]);
			$ISBN=$this->db->escape((int)$_POST["ISBN"]);
			$año=$this->db->escape((int)$_POST["año"]);
			$país=$this->db->escape($_POST["país"]);
			$paginas=$this->db->escape((int)$_POST["paginas"]);
			$URL=$this->db->escape($_POST["URL"]);

			if($this->principal_capitulo_model->setCapitulo($titulo_capitulo, $autores, $autoresExternos, $tipo, $estatus,$título_del_libro, (int)$núm_del_capítulo, $editores, $editorial, (int)$ISBN, (int)$año, $país, (int)$paginas, $URL)){
				header("Location:".base_url()."principal_capitulo/capitulo");
			}
		}
	}

	public function editar_Capitulo($id_capituloLibro = null){
		if (!$id_capituloLibro == null) {

			$id_capituloLibro = $this->db->escape((int)$id_capituloLibro);

			$Capitulo = $this->principal_capitulo_model->getCapitulo($id_capituloLibro);

			$this->load->view("plantilla/head");
			$this->load->view("header/headerMenu");
			$this->load->view("formularios_capitulo/editar_capitulo", compact("Capitulo"));
		
		}
		else{
			header("Location:".base_url()."principal_capitulo");
		}
	}


	

	public function actualizarCapitulo(){


		if ($this->input->post()) {

			$id_capituloLibro = $this->db->escape((int)$_POST["id_capituloLibro"]);
			$titulo_capitulo=$this->db->escape($_POST["titulo_capitulo"]);
			$autores=$this->db->escape($_POST["autores"]);
			$autoresExternos=$this->db->escape($_POST["autoresExternos"]);
			$tipo=$this->db->escape($_POST["tipo"]);
			$estatus=$this->db->escape($_POST["estatus"]);
			$título_del_libro=$this->db->escape($_POST["título_del_libro"]);
			$núm_del_capítulo=$this->db->escape((int)$_POST["núm_del_capítulo"]);
			$editores=$this->db->escape($_POST["editores"]);
			$editorial=$this->db->escape($_POST["editorial"]);
			$ISBN=$this->db->escape((int)$_POST["ISBN"]);
			$año=$this->db->escape((int)$_POST["año"]);
			$país=$this->db->escape($_POST["país"]);
			$paginas=$this->db->escape((int)$_POST["paginas"]);
			$URL=$this->db->escape($_POST["URL"]);
			

			if ($this->principal_capitulo_model->actualizarCapitulo($id_capituloLibro, $titulo_capitulo, $autores, $autoresExternos, $tipo, $estatus, $título_del_libro, (int)$núm_del_capítulo, $editores, $editorial, (int)$ISBN, (int)$año, $país, (int)$paginas, $URL)){

				header("Location:".base_url()."principal_capitulo/capitulo");	
			}
		}
	}

	public function eliminarCapitulo(int $id_capituloLibro){
		if ($this->principal_capitulo_model->eliminarCapitulo((int) $id_capituloLibro)) {
				header("Location:".base_url()."principal_capitulo/capitulo");
			}
	}
}
?>