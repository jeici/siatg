<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Nota_model extends CI_Controller{

    function __construct(){
		parent::__construct();
		$this->load->database();
	}
        
        function obtener_defensa(){
	$query= $this->db->query("SELECT * FROM defensa;");
		$item1=array();
		foreach ($query->result_array() as $campo){
			$item1[$campo['id_defensa']]=$campo['num_defensa'];	//darle formato al array para que me funcione con el dropbox	
		}

		return $item1;
	}
        
        function obtener_trabajog(){
	$query= $this->db->query("SELECT * FROM trabajograduacion;");
		$item2=array();
		foreach ($query->result_array() as $campo){
			$item2[$campo['id_trabajog']]=$campo['tema'];	//darle formato al array para que me funcione con el dropbox	
		}

		return $item2;
	}
    
    
    
    function agregar_nota($a1, $a2, $a3){
		
                                
                               
                $sql= "SELECT prc_ins_nota(?,?,?);";

		$query = $this->db->query($sql,array($a1,$a2,$a3));
                	
                    }
                    
       
}
?>
