<?php
/**
* 
*/
class User extends CI_Model
{
	public function gerUser($correo ='')
	{
     $result = $this->db->query("SELECT * FROM usuario WHERE id_usuario = '" . $id ."' LIMIT 1");
     if($result->num_rows()>0){
     	return $result->row();
     }else{
     	return null;
     }
	}


?>