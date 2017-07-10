<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('validar_acceso_publico')) {
	// Método para validar la visualización de iconos y botones de registro, edición y borrado
    function validar_acceso_publico(){
		$ci = & get_instance();
		
		// Si estamos logueados validamos los controladores y métodos permitidos según el perfil y usuario
		if(isset($ci->session->userdata['logged_in_public'])){
			echo "<script>
			 $(document).ready(function () {
				$('li#li_inicio').hide();
				$('li#li_cerrar').show();
				$('li#li_perfil').show();
				$('span#span_perfil').text('".$ci->session->userdata['logged_in_public']['username']."');
			 });
			</script>";
		}else{
			echo "<script>
			 $(document).ready(function () {
				$('li#li_inicio').show();
				$('li#li_cerrar').hide();
				$('li#li_perfil').hide();
			 });
			</script>";
		}
	}	
}
