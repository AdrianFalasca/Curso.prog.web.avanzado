<?php
//echo phpinfo(); exit;
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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





	public function index()
	{
		
		$this->load->model('productos_modelo');
      
		$prod_1 = $this->productos_modelo->todos_aristoteles();
		$prod_2 = $this->productos_modelo->todos_platon();
		$prod_3 = $this->productos_modelo->todos_sanagustin();

		$parametros["prod_1"]=$prod_1;
		$parametros["prod_2"]=$prod_2;
		$parametros["prod_3"]=$prod_3;
		$html = $this->load->view("home",$parametros,true);

        
        $parametros["contenido"]=$html;
		$this->load->view("Layout/Layout",$parametros);

		
		
	}

	
}
