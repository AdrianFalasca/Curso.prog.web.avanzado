<?php
class productos_modelo extends CI_Model  {

   function __construct(){
      parent::__construct();
   }
   
   public function todos_aristoteles(){ 

       $this->db->select("*");
       $this->db->from("producto");
       $this->db->where("autor","Aristoteles");
       $consulta = $this->db->get();
       $resultados = $consulta->result_array();
       return $resultados;
   } 

public function todos_platon(){ 

       $this->db->select("*");
       $this->db->from("producto");
       $this->db->where("autor","Platon");
       $consulta = $this->db->get();
       $resultados = $consulta->result_array();
       return $resultados;
   }  


public function todos_sanagustin(){ 

       $this->db->select("*");
       $this->db->from("producto");
       $this->db->where("autor","SanAgustin");
       $consulta = $this->db->get();
       $resultados = $consulta->result_array();
       return $resultados;
   }    


   public function por_id($id){ 

        $this->db->select("*");
        $this->db->from("producto");
        $this->db->where("Id",$id);
        $consulta = $this->db->get();
        $resultados = $consulta->result_array();
        return $resultados;

   }
   
  

   
}

?>