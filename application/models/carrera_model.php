<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Carrera_model extends CI_Controller{

    function __construct(){
		parent::__construct();
		$this->load->database();
	}
        
         
    
    function agregar_carrera($a1, $a2){
		
                                
                               
                $sql= "SELECT prc_ins_carrera(?,?);";

		$query = $this->db->query($sql,array($a1,$a2));
                	
                    }
                    
     /*modificar  update*/
    function obtener_carr(){
                
            $query=$this->db->query("SELECT * FROM carrera;");
            return $query->result();
    }
    
    function obtener_id($id){
                
            $query=$this->db->query("SELECT * from carrera where id_carrera = $id;");
            
            return $query->result();
    }
    function modificar_carr($a1,$a2,$a3){
		                                
               
               
                $sql= "SELECT prc_upd_carr(?,?,?);";

		$query = $this->db->query($sql,array($a1,$a2,$a3));
		
                	
               }
}
?>