<?php
class Login extends CI_Controller
{
	public function index()
	{   
		
		$correo = $this->input->post('correo');
		$contraseña =$this->input->post('contraseña');
		$this->load->model('usuario');
		$fila = $this->user->getUser('correo');
		if($fila != null){
			if ($fila->contraseña == $contraseña) {
              $data = array(
                'email' =>$correo,
                'id' =>$fila->id_usario,
                'login' =>true
              	);
              $this->session->set_userdata($data);
			}else{
				header("Location:" . base_url()inicio/ini); 
			}
		}else{
			header("Location:" . base_url());
		}



	}

}
?>