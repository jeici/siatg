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
}
?>