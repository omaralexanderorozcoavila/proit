<?php

Class BasicauthPublic
{
	function __construct()
	{
		$this->CI = & get_instance();
	}
	
	function login($usuario, $password)
	{
		$data = array();
		$query = $this->CI->db->get_where('users', array('username'=>$usuario, 'password'=>$password));
		
		if($query->num_rows() > 0){
			//~ echo "Pasó 1";
			$query = $this->CI->db->get_where('users', array('username'=>$usuario, 'password'=>$password, 'status'=>1));
			if($query->num_rows() > 0){
				//~ echo "Pasó 2";
				// Creamos la sesión y le cargamos los datos de usuario (cliente)
				$session_data = array(
					'id' => $query->row()->id,
					'username' => $usuario,
					'name' => $query->row()->name,
					'lastname' => $query->row()->lastname,
					'admin' => $query->row()->admin,
					'status' => $query->row()->status
				);
				$this->CI->session->set_userdata('logged_in_public',$session_data);
				
			}else{
				$data['error'] = 'Disculpe, el usuario no tiene acceso, consulte con el administrador del sitio';
			}
		}else{
			$data['error'] = 'Usuario o contraseña incorrectos';
		}
		
		return $data;
	}
	
	function logout()
	{
		$this->CI->session->sess_destroy();
	}
}
