<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Asesoria_model extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this ->load->database();
	}



	function agregar_asesoria($cod_trab,$numase, $fechase,$horaase){
		$sql = "select prc_ins_asesoria(";
		
		$sql.=$cod_trab.",";
		$sql.=$numase.",";
		$sql.="'".$fechase."',";
                $sql.="'".$horaase."')"; 
		
                   
                        
                        
		
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



}
?>