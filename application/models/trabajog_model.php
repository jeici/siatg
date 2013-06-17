<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Trabajog_model extends CI_Controller{

    function __construct(){
		parent::__construct();
		$this->load->database();
	}
        
        function obtener_asesor(){
	$query= $this->db->query("SELECT * FROM asesor;");
		$item1=array();
		foreach ($query->result_array() as $campo){
			$item1[$campo['carnet']]=$campo['nombres_p'];	//darle formato al array para que me funcione con el dropbox	
		}

		return $item1;
	}
        
        function obtener_observador(){
	$query= $this->db->query("SELECT * FROM observador;");
		$item2=array();
		foreach ($query->result_array() as $campo){
			$item2[$campo['carnet']]=$campo['nombres_p'];	//darle formato al array para que me funcione con el dropbox	
		}

		return $item2;
	}
    
    
    
    function agregar_trabajog($a1, $a2, $a3, $a4, $a5, $a6,$a7, $a8){
		
                                
                               
                $sql= "SELECT prc_ins_trabajog(?,?,?,?,?,?,?,?);";

		$query = $this->db->query($sql,array($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8));
                	
                    }
                    
       /*modificar update*/
    function obtener_tg(){
                
            $query=$this->db->query("SELECT * FROM trabajograduacion;");
            return $query->result();
    }
    
    function obtener_id($id){
                
            $query=$this->db->query("SELECT * FROM trabajograduacion where id_trabajog = $id;");
            
            return $query->result();
    }
    function modificar_tg($a1,$a2,$a3,$a4,$a5,$a6,$a7){
		                                
               
               
                $sql= "SELECT prc_upd_tg(?,?,?,?,?,?,?);";

		$query = $this->db->query($sql,array($a1,$a2,$a3,$a4,$a5,$a6,$a7));
		
                	
               }
}
?>