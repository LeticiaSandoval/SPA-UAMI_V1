<?php
/**
* 
*/
class Usuario extends CI_Model
{
	public function getUsuario($correo ='')
	{
	 
     $result = $this->db->query("SELECT * FROM usuario WHERE email = '" . $correo ."' LIMIT 1");
     if($result->num_rows()>0){
     	return $result->row();
     }else{
     	return null;
     }
	}
}


?>