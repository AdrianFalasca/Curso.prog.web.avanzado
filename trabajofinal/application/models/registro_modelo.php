<?php
class registro_modelo extends CI_Model  {

   function __construct(){
      parent::__construct();
   }
   
   
   public function registro_m ($nombre, $apellido, $email, $telefono, $password, $conf_pass){

        $data["Nombre"]=$nombre;
        $data["Apellido"]=$apellido;
        $data["Email"]=$email;
        $data["Telefono"]=$telefono;
        $data["Password"]=$password;
        $data["Conf_pass"]=$conf_pass;
       
        $this->db->insert("registro",$data);
        

    
    }


   public function login_m ($email, $password){
        $this->db->select("*");
        $this->db->from("registro");
        $this->db->where("Email", $email);
        $this->db->where("Password", $password);
        $consulta = $this->db->get();
        $resultados = $consulta->result_array();
        return $resultados;
    }
   


   
}
?>