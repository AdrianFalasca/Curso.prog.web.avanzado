<?php
//echo phpinfo(); exit;
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

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
	
		$parametros["titulo"]="Registro";
		$parametros["error"]="";
		
		$html = $this->load->view("registro",$parametros, true); 

		$parametros["contenido"]= $html;
		$this->load->view("Layout/Layout",$parametros); 
	
	}



	public function registro_ajax()
	{




$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$password=$_POST['password'];
$conf_pass=$_POST['conf_pass'];

 


    if (empty($nombre) || strlen($nombre) < 3) {

             
    	echo json_encode(array("status"=>"error","mensaje"=>" Ingrese un nombre válido"));
			
			
		}

else  if (empty($apellido) || strlen($apellido) < 3) {
       
        
        echo json_encode(array("status"=>"error","mensaje"=>" Ingrese un apellido válido"));

         }

        
 else if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
       
        echo json_encode(array("status"=>"error","mensaje"=>" Ingrese un email válido"));
        
    } 

else if  ($telefono && (!is_numeric($telefono) || strlen($telefono) < 8)) {
       
        echo json_encode(array("status"=>"error","mensaje"=>" Ingrese un teléfono válido"));
        
    } 



  else if (empty($password) || strlen($password) < 8  && empty($conf_pass) || strlen($conf_pass) < 8 )   {
        
         
         
          echo json_encode(array("status"=>"error","mensaje"=>"Las contraseñas deben tener como mínimo 8 caracteres "));

    }

 else   if ($password!=$conf_pass) {
       
         
   echo json_encode(array("status"=>"error","mensaje"=>"Las contraseñas deben ser idénticas"));
    }
    




else{

echo json_encode(array("status"=>"ok","mensaje"=>""));
			  
			$this->load->model('registro_modelo', array(), true);
      
	    $this->registro_modelo->registro_m($nombre, $apellido, $email, $telefono, $password, $conf_pass );

			

}

} 

}