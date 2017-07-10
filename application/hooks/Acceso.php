<?php
class Acceso
{
	private $controladores = array();  // Variable que contendrá la lista de controladores
	private $CI;
	
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	function identificado()
	{
		$this->CI =&get_instance();
		$this->listar_controladores("application/controllers/");
		$controllersprivados = $this->controladores;  // Controladores restringidos sin logueo
		$controllerspermitidos = array();  // Controladores permitidos para el usuario logueado
		
		//~ $this->CI->session->sess_destroy();  // Para borrar sesión en ocasiones que en las que no querramos borrar todos los datos del navegador
		
		// Si estamos logueados e intenamos volver al login o admin nos redirige al home
		//~ if(isset($this->CI->session->userdata['logged_in']) && ($this->CI->router->method == 'login' || $this->CI->router->method == 'admin')){
			//~ redirect(base_url().'home');
		//~ }
		
		// Si no estamos logueados e intentamos acceder a un controlador restringido nos redirige al login
		//~ if(!isset($this->CI->session->userdata['logged_in']) && $this->CI->router->method != 'login' && in_array($this->CI->router->class, $controllersprivados)){
			//~ redirect(base_url().'login');
		//~ }
		
		// Si no estamos logueados como cliente e intentamos acceder al área de perfil
		if(!isset($this->CI->session->userdata['logged_in_public']) && $this->CI->router->method == 'public_perfil'){
			redirect(base_url().'index');
		}
		
	}
	
	// Método público para obterner una lista de controladores
    function listar_controladores($ruta)
    {
        // abrir un directorio y listarlo recursivo
        if (is_dir($ruta)) {
            if ($dh = opendir($ruta)) {
                while (($file = readdir($dh)) !== false) {
					//esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio
					//mostraría tanto archivos como directorios
                    if ($file!="." && $file!=".."){
                        $controlador = str_replace('.php', '', $file);
                        $controllersbase = array('Welcome','CLogin','LanguageSwitcher');  // Controladores a ignorar
                        if(!in_array($controlador, $controllersbase) && $controlador != 'index.html'){
							$this->controladores[] = $controlador;
						}
                    }
                }
                closedir($dh);
            }
        }else{
            echo "<br>No es ruta valida";
        }
        return $this->controladores;
    }
}
/*
/end hooks/Acceso.php
*/
