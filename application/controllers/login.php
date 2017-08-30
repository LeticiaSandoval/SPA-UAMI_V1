<?php
class Login extends CI_Controller
{
	public function index()
	{   
		
		$correo = $this->input->post('correo');
		$contraseña =$this->input->post('contraseña');
		$this ->load->model('usuario');
		$fila = $this ->usuario->getUsuario($correo);
        if($fila != null){
        	if($fila->contraseña == $contraseña){

        		$data = array(
                'email' =>$correo,
                'id_usuario' =>$fila->id_usuario,
                'login' =>true
              	);
              $this->session->set_userdata($data);

        	}else{
        		header("Location: " . base_url());  

        	}
        }else{
        		header("Location: " . base_url()); 
        }
	}
}
?>