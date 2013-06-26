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
      //obtiene todos los docentes
	function obtener_docente(){
		$query=$this->db->query("SELECT * FROM docente;");
			return $query->result();
		
	}
	
	//obtiene todos los estudiantes
	function obtener_estudiante(){
		$query=$this->db->query("SELECT * FROM estudiante;");
		return $query->result();
	}
        
        function obtener_titulo(){
		$query=$this->db->query("SELECT titulo FROM docente;");
		$titulo=array();
		foreach($query->result_array() as $campo){
			$titulo[$campo['titulo']]=$campo['titulo'];
		}
		return $titulo;
	}
        
        function actualizar_persona($carnet_p,$id_carr, $id_tele,  $name, $ape , $dir, $email, $status, $type,$type2, $titlo,$idtrag,$tele){
		$sql = "select prc_mod_persona('";
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
        
        function buscar_docente($carnet){
	
		$sql = "SELECT * FROM docente where carnet = ?";
	
		$query=$this->db->query($sql, array($carnet));// hace la consulta
		$user=array();// define un array que tendra los datos.
		foreach ($query->result_array() as $campo){
			$user['carnet']=$campo['carnet'];
			$user['id_carrera']=$campo['id_carrera'];
			$user['id_telefono']=$campo['id_telefono'];
			$user['nombres_p']=$campo['nombres_p'];
			$user['apellidos_p']=$campo['apellidos_p'];
			$user['direccion_p']=$campo['direccion_p'];	//darle formato al array para que pueda llenar el formulario
            $user['correo_p']=$campo['correo_p'];
			$user['titulo']=$campo['titulo'];
			$user['estado_persona']=$campo['estado_persona'];	
		}		
		//print_r($user);
		return $user;// retorna el array al controlador
		
		
	}
	
	function buscar_estudiante($carnet){
	
		$sql = "SELECT * FROM estudiante where carnet = ?";
	
		$query=$this->db->query($sql, array($carnet));// hace la consulta
		$user=array();// define un array que tendra los datos.
		foreach ($query->result_array() as $campo){
			$user['carnet']=$campo['carnet'];
			$user['id_carrera']=$campo['id_carrera'];
			$user['id_telefono']=$campo['id_telefono'];
			$user['nombres_p']=$campo['nombres_p'];
			$user['apellidos_p']=$campo['apellidos_p'];
			$user['direccion_p']=$campo['direccion_p'];	//darle formato al array para que pueda llenar el formulario
			$user['correo_p']=$campo['correo_p'];
			$user['id_trabajog']=$campo['id_trabajog'];
			$user['estado_persona']=$campo['estado_persona'];
		}
		//print_r($user);
		return $user;// retorna el array al controlador
	
	
	}
	
	function buscar_tg($tg){
		$sql="SELECT id_trabajog FROM estudiante where carnet = ?";
		$query=$this->db->query($sql,array($tg));
		$item=$query->result_array();
		return $item;
	}
	
	function buscar_telefono($tel){
		$sql="SELECT id_telefono,telefono FROM telefono WHERE id_telefono=?;";
		$query=$this->db->query($sql,array($tel));
		$item=array();
		foreach($query->result_array() as $campo){
			$item['id_telefono']=$campo['id_telefono'];
			$item['telefono']=$campo['telefono'];
		}
		return $item;
	}
        
        
}