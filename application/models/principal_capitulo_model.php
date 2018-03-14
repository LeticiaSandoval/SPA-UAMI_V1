<?php
class Principal_Capitulo_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	//Consultar la informacion de los registros
	public function getCapitulos(){
		return $this->db->query("SELECT * FROM capitulo_libro")->result();
	}
	//Agregar un nuevo registro de capitulo de libro
	public function setCapitulo(string $titulo_capitulo, string $autores, string $autoresExternos, string $tipo, string $estatus, string $título_del_libro, int $núm_del_capítulo, string $editores, string $editorial, int $ISBN, int $año, string $país, int $paginas, string $URL){
		return $this->db->query(" INSERT INTO capitulo_libro (titulo_capitulo, autores, autoresExternos, tipo, estatus, título_del_libro, núm_del_capítulo, editores, editorial, ISBN, año, país, paginas, URL) values ( {$titulo_capitulo},{$autores},{$autoresExternos},{$tipo},{$estatus},{$título_del_libro},{$núm_del_capítulo},{$editores},{$editorial},{$ISBN},{$año},{$país},{$paginas},{$URL}) " );
	}
	//
	public function getCapitulo(int $id_capituloLibro){
		return $this->db->query("SELECT id_capituloLibro, titulo_capitulo, autores, autoresExternos, tipo, estatus,título_del_libro, núm_del_capítulo, editores, editorial, ISBN, año, país, paginas, URL FROM capitulo_libro WHERE id_capituloLibro = {$id_capituloLibro}")->row();
	}
	//Editar la informacion de un registro de un capitulo de libro
	public function actualizarCapitulo(int $id_capituloLibro, string $titulo_capitulo, string $autores, string $autoresExternos, string $tipo, string $estatus, string $título_del_libro, int $núm_del_capítulo, string $editores, string $editorial, int $ISBN, int $año, string $país, int $paginas, string $URL){
		return $this->db->query("UPDATE capitulo_libro SET titulo_capitulo={$titulo_capitulo}, autores={$autores}, autoresExternos={$autoresExternos}, tipo={$tipo}, estatus={$estatus},título_del_libro={$título_del_libro}, núm_del_capítulo={$núm_del_capítulo}, editores={$editores}, editorial={$editorial}, ISBN={$ISBN}, año={$año}, país={$país}, paginas={$paginas}, URL={$URL} WHERE id_capituloLibro={$id_capituloLibro}");
	}
	//Eliminar un registro de capitulo de libro
	public function eliminarCapitulo(int $id_capituloLibro){
		return $this->db->query("DELETE FROM capitulo_libro WHERE id_capituloLibro = {$id_capituloLibro}");

	}

}

?>