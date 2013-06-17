<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Nivel_model extends CI_Controller{

    function __construct(){
		parent::__construct();
		$this->load->database();
	}	
    
    
    
    function agregar_nivel($tip){
		print $tip;
                                
                $sql = "select * from prc_ins_nivel('";
                $sql.="".$tip."')";
               
                $query = $this->db->query($sql);
		
                	
                    }
    function obtener_nivel(){
                
            $query=$this->db->query("SELECT * FROM nivel;");
            return $query->result();
    }
    
    function obtener_id($id){
                
            $query=$this->db->query("SELECT * FROM nivel where id_nivel = $id;");
            
            return $query->result();
    }
    function modificar_nivel($id,$tipo){
		                                
               
               
                $sql= "SELECT prc_upd_nivel(?,?);";

		$query = $this->db->query($sql,array($id,$tipo));
		
                	
               }
}
?>