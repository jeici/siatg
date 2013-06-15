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
}
?>