<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Inicio_model extends CI_Controller{

    function __construct(){
		parent::__construct();
		$this->load->database();
	}	
    
    
    
    function agregar_inicio(){
		//print $tip;
                            
                $a1=$this->session->userdata['username'];
                $sql = "select id_nivel from login where nick=?";;
               
               $query = $this->db->query($sql,array($a1));
               
               return $query->result();
                	
           }
                    /*modificar update*/
   
}
?>