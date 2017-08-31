<?php
class Principal_Libro_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getLibros(){
		return $this->db->query("SELECT * FROM libro_capitulo_libro")->result();
	}
	public function setLibro(string $titulo_articulo, string $autores, string $autoresExternos, string $título_del_libro, int $núm_del_capítulo, string $editores, string $editorial, int $ISBN, int $año, string $país, int $pág_ini, int $pág_fin){
		return $this->db->query(" INSERT INTO libro_capitulo_libro (titulo_articulo, autores, autoresExternos, título_del_libro, núm_del_capítulo, editores, editorial, ISBN, año, país, pág_ini, pág_fin) values ( {$titulo_articulo},{$autores},{$autoresExternos},{$título_del_libro},{$núm_del_capítulo},{$editores},{$editorial},{$ISBN},{$año},{$país},{$pág_ini},{$pág_fin}) " );
	}

	public function getLibro(int $id_artLibCapítulo){
		return $this->db->query("SELECT id_artLibCapítulo, titulo_articulo, autores, autoresExternos, título_del_libro, núm_del_capítulo, editores, editorial, ISBN, año, país, pág_ini, pág_fin FROM libro_capitulo_libro WHERE id_artLibCapítulo = {$id_artLibCapítulo}")->row();
	}

	public function actualizarLibro(int $id_artLibCapítulo, string $titulo_articulo, string $autores, string $autoresExternos, string $título_del_libro, int $núm_del_capítulo, string $editores, string $editorial, int $ISBN, int $año, string $país, int $pág_ini, int $pág_fin){
		return $this->db->query("UPDATE libro_capitulo_libro SET titulo_articulo={$titulo_articulo}, autores={$autores},autoresExternos={$autoresExternos}, título_del_libro={$título_del_libro}, núm_del_capítulo={$núm_del_capítulo}, editores={$editores}, editorial={$editorial}, ISBN={$ISBN}, año={$año}, país={$país}, pág_ini={$pág_ini}, pág_fin={$pág_fin} WHERE id_artLibCapítulo={$id_artLibCapítulo}");
	}

	public function eliminarLibro(int $id_artLibCapítulo){
		return $this->db->query("DELETE FROM libro_capitulo_libro WHERE id_artLibCapítulo = {$id_artLibCapítulo}");

	}

}

?>