<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Persona_model extends CI_Model{
	function agregar_persona($carnet_p, $id_carr, $id_tele, $name, $ape , $dir, $email, $status, $type){
		$sql = "select prc_ins_persona('";
		$sql.=$carnet_p."',";
		$sql.=$id_carr."',";
		$sql.=$id_tele."',";
		$sql.=$name."',";
		$sql.=$ape."',";
		$sql.=$dir."',";
		$sql.=$email."',";
		$sql.=$status."',";
		$sql.=$type."',";
		
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
	
}