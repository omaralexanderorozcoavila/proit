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
	public function partnerships()
	{
		$this->load->view('new/partnerships');
	}
	
	public function smartcities()
	{
		$this->load->view('new/smartcities');
	}
	
	public function smartindustries()
	{
		$this->load->view('new/smartindustries');
	}
	
	public function energyconsumption()
	{
		$this->load->view('new/energyconsumption');
	}
	
	public function greenspaces()
	{
		$this->load->view('new/greenspaces');
	}
	
	public function wastlecollection()
	{
		$this->load->view('new/wastlecollection');
	}
	
	public function fleetmanagement()
	{
		$this->load->view('new/fleetmanagement');
	}
	
	public function citizeninterface()
	{
		$this->load->view('new/citizeninterface');
	}
	
	public function agriculture()
	{
		$this->load->view('new/agriculture');
	}
	
	public function cargomanagement()
	{
		$this->load->view('new/cargomanagement');
	}
	
	public function aquaculture()
	{
		$this->load->view('new/aquaculture');
	}
	
	// Métodos de ruta a páginas de soluciones
	public function products()
	{
		$this->load->view('new/products');
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
