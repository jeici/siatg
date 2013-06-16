<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Defensa_model extends CI_Controller{

    function __construct(){
		parent::__construct();
		$this->load->database();
	}
        
        function obtener_trabajog(){
	$query= $this->db->query("SELECT * FROM trabajograduacion;");
		$item1=array();
		foreach ($query->result_array() as $campo){
			$item1[$campo['id_trabajog']]=$campo['tema'];	//darle formato al array para que me funcione con el dropdown	
		}

		return $item1;
	}
        
          
        function agregar_defensa($a1, $a2, $a3, $a4, $a5){
		
                                
                               
                $sql= "SELECT prc_ins_defensa(?,?,?,?,?);";

		$query = $this->db->query($sql,array($a1,$a2,$a3,$a4,$a5));
                	
                    }
}
?>