<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Logeo_model extends CI_Controller{

    public function __construct(){
		parent::__construct();
		$this->load->database();
	}
        
         
    
    public function obtener_logeo($a1,$a2){
		
                                
                               
                $sql= "SELECT nick from login where nick=? and clave=?;";

		$query = $this->db->query($sql,array($a1,$a2));
                //echo 'modelo';
                //printf($a1);
                //printf($a2);
                
                return $query->result_array();	
        }
        
     public function isLogged()
    {
    //Comprobamos si existe la variable de sesión username. En caso de no existir, le impediremos el paso a la página para usuarios registrados
   
        if(isset($this->session->userdata['username']))
        {
        return TRUE;
        }
        else
        {
        return FALSE;
        }
       
    }
   
   
   
    public function close()
    {
    //cerrar sesión
    return $this->session->sess_destroy();
    }
                   
                    
     /*modificar  update*/
    
}
?>