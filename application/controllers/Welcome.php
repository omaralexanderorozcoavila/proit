<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	// Métodos de ruta a páginas del index
	public function index()
	{
		$this->load->view('inicio');
	}
	
	public function nosotros()
	{
		$this->load->view('nosotros');
	}
	
	// Métodos de ruta a páginas de mercados
	public function admin_p()
	{
		$this->load->view('admin_p');
	}
	
	public function ambiente()
	{
		$this->load->view('ambiente');
	}
	
	public function agricultura()
	{
		$this->load->view('agricultura');
	}
	
	public function energia()
	{
		$this->load->view('energia');
	}
	
	public function industria()
	{
		$this->load->view('industria');
	}
	
	public function mar()
	{
		$this->load->view('mar');
	}
	
	public function salud()
	{
		$this->load->view('salud');
	}
	
	public function servicios_f()
	{
		$this->load->view('servicios_f');
	}
	
	public function telecomunicaciones()
	{
		$this->load->view('telecomunicaciones');
	}
	
	public function transporte()
	{
		$this->load->view('transporte');
	}
	
	public function ciudades_i()
	{
		$this->load->view('ciudades_i');
	}
	
	// Métodos de ruta a páginas de soluciones
	public function soluciones()
	{
		$this->load->view('soluciones');
	}
	
	public function intraestructura()
	{
		$this->load->view('intraestructura');
	}
	
	public function seguridad()
	{
		$this->load->view('seguridad');
	}
	
	public function plataformas()
	{
		$this->load->view('plataformas');
	}
	
	public function redes_i()
	{
		$this->load->view('redes_i');
	}
	
	public function gestion_s()
	{
		$this->load->view('gestion_s');
	}
	
	public function outsourcing()
	{
		$this->load->view('outsourcing');
	}
	
	public function productos()
	{
		$this->load->view('productos');
	}
	
	// Métodos de ruta a la página de contacto
	public function contacto()
	{
		$this->load->view('contacto');
	}
}
