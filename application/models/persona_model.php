<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Persona_model extends CI_Controller{

    function __construct(){
		parent::__construct();
	$this ->load->database();
	}	
    
    
    
    function agregar_persona($carnet_p,$id_carr, $id_tele,  $name, $ape , $dir, $email, $status, $type,$type2, $titlo,$idtrag,$tele){
		$sql = "select prc_ins_persona('";
		$sql.=$carnet_p."',";
		$sql.=$id_carr.",";
		$sql.=$id_tele.",";
		$sql.="'".$name."',";
		$sql.="'".$ape."',";
		$sql.="'".$dir."',";
		$sql.="'".$email."',";
		$sql.="'".$status."',";
		$sql.="'".$type."',";
                $sql.="'".$type2."',";
                $sql.="'".$titlo."',";
		$sql.=$idtrag.",";
                $sql.=$tele.")";      
                        
                        
		
		$query = $this->db->query($sql);
		
		if($query->num_rows()>0){
			foreach ($query->result() as $fila){
				$data[]=$fila;
			}
		return $data;
		}
		else{
			$data[]="la consulta no se pudo ejecutar";
		return $data;
                
		} 
			
	}
        
        function obtener_tg(){
	$query= $this->db->query("SELECT * FROM trabajograduacion;");
		$item=array();
		foreach ($query->result_array() as $campo){
			$item[$campo['id_trabajog']]=$campo['tema'];	//darle formato al array para que me funcione con el dropbox	
		}

		return $item;
        
        }
        
         function obtener_carrera(){
	$query= $this->db->query("SELECT * FROM carrera;");
		$item2=array();
		foreach ($query->result_array() as $campo){
			$item2[$campo['id_carrera']]=$campo['nombre_carrera'];	//darle formato al array para que me funcione con el dropbox	
		}

		return $item2;
        
        }
      
        
        
}