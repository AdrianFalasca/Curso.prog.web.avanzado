<?php
//echo phpinfo(); exit;
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		
		$this->load->model('registro_modelo', array(), true);
	
		$parametros["titulo"]="Login";
		
		$html = $this->load->view("login",$parametros,true); 


		$parametros["contenido"]= $html;
		$this->load->view("Layout/Layout",$parametros); 
	
		
	}




public function login_ajax(){


	$this->load->model("registro_modelo");
	$usuario = $this->registro_modelo->login_m( $_POST["email"],  $_POST["password"]);

		if($usuario){
			
			echo json_encode(array("status"=>"ok","mensaje"=>""));
			
		}else{


			echo json_encode(array("status"=>"error","mensaje"=>"Usuario y/o Contraseña incorrectos"));
			


		}

	
}
}
