<?php
class Principal_Libro_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getLibros(){
		return $this->db->query("SELECT * FROM libro")->result();
	}
	public function setLibro(string $título_del_libro, string $autores, string $autoresExternos, string $tipo, string $estatus, string $editorial, string $editores, int $ISBN, int $año, string $país, int $páginas, string $URL){
		return $this->db->query(" INSERT INTO libro (título_del_libro, autores, autoresExternos, tipo, estatus, editorial, editores, ISBN, año, país, páginas, URL) values ( {$título_del_libro},{$autores},{$autoresExternos},{$tipo},{$estatus},{$editorial},{$editores},{$ISBN},{$año},{$país},{$páginas},{$URL}) " );
	}
	public function getLibro(int $id_libro){
		return $this->db->query("SELECT id_libro, título_del_libro, autores, autoresExternos, tipo, estatus, editorial, editores, ISBN, año, país, páginas, URL FROM libro WHERE id_libro = {$id_libro}")->row();
	}

	public function actualizarLibro(int $id_libro, string $título_del_libro, string $autores, string $autoresExternos, string $tipo, string $estatus, string $editorial, string $editores, int $ISBN, int $año, string $país, int $páginas, string $URL){
		return $this->db->query("UPDATE libro SET título_del_libro={$título_del_libro}, autores={$autores},autoresExternos={$autoresExternos}, tipo={$tipo}, estatus={$estatus}, editorial={$editorial}, editores={$editores}, ISBN={$ISBN}, año={$año}, país={$país}, páginas={$páginas}, URL={$URL} WHERE id_libro={$id_libro}");
	}

	public function eliminarLibro(int $id_libro){
		return $this->db->query("DELETE FROM libro WHERE id_libro = {$id_libro}");

	}

}

?>