<?php
//echo phpinfo(); exit;
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalle extends CI_Controller {

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





	public function index(){
		
		

}

	public function libro($id){

	$this->load->model('productos_modelo');
      
		$prod = $this->productos_modelo->por_id($id);
		

		$parametros["prod_1"]=$prod;
		$html = $this->load->view("detalle",$parametros, true); 

		$parametros["contenido"]= $html;
		$this->load->view("Layout/Layout",$parametros); 
		
}

}