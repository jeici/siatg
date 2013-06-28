<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Usuario_model extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this ->load->database();
	}



	function agregar_usuario($nombre,$apellido,$dir,$email,$nick,$pass,$status,$carrera,$tipo,$nivel,$tel){
		
		$sql= "SELECT prc_ins_usuario(?,?,?,?,?,?,?,?,?,?,?);";

		/*if($tipo==1){
			$nivel=1;
		}else{
			$nivel=2;
		}*/
		
		$query = $this->db->query($sql,array($nombre,$apellido,$dir,$email,$nick,$pass,$status,$nivel,$carrera,$tipo,$tel));

		if($query->num_rows()>0){
			foreach ($query->result() as $fila){
				$data[]=$fila;
			}
			return $data;
		}
		else{
			$data[]="la consulta no pudo ser ejecutada";
			return $data;
		}
			
	}

	//para llenar el dropdown de carrera
	
	function obtener_carrera(){
	$query= $this->db->query("SELECT * FROM carrera;");
		$carrer=array();
		foreach ($query->result_array() as $campo){
			$carrer[$campo['id_carrera']]=$campo['nombre_carrera'];	//darle formato al array para que me funcione con el dropbox	
		}

		return $carrer;
	}
	
	function obtener_nivel(){
		$query=$this->db->query("SELECT * FROM nivel;");
		$nvel=array();
		foreach($query->result_array() as $campo){
			$nvel[$campo['id_nivel']]=$campo['tipo'];
		}
		return $nvel;
	}
	
	//obtiene todos los admin
	function obtener_admin(){
		$query=$this->db->query("SELECT * FROM administrador;");
			return $query->result();
		
	}
	
	//obtiene todos los dba
	function obtener_dba(){
		$query=$this->db->query("SELECT * FROM dba;");
		return $query->result();
	}

	//obtiene un usuario especifico
	function buscar_dba($id){
		
		$sql = "SELECT * FROM dba WHERE id_usuario = ?";
		
		$query=$this->db->query($sql, array($id));//hace la consulta
		$user=array();//define un array
		foreach ($query->result_array() as $campo){
			$user['id_usuario']=$campo['id_usuario'];
			$user['nombre_u']=$campo['nombre_u'];
			$user['apellido_u']=$campo['apellido_u'];
			$user['direccion_u']=$campo['direccion_u'];
			$user['correo_u']=$campo['correo_u'];
			$user['nick']=$campo['nick'];	//darle formato al array para que llene el formulario.
		}
		return $user;
	}
	
	//obtiene un usuario especifico
	function buscar_admin($id){
	
		$sql = "SELECT * FROM administrador WHERE id_usuario = ?";
	
		$query=$this->db->query($sql, array($id));// hace la consulta
		$user=array();// define un array que tendra los datos.
		foreach ($query->result_array() as $campo){
			$user['id_usuario']=$campo['id_usuario'];
			$user['nombre_u']=$campo['nombre_u'];
			$user['apellido_u']=$campo['apellido_u'];
			$user['direccion_u']=$campo['direccion_u'];
			$user['correo_u']=$campo['correo_u'];
			$user['nick']=$campo['nick'];	//darle formato al array para que pueda llenar el formulario
		}		
		
		return $user;// retorna el array al controlador
		
		
	}
	//obtiene los datos de login de un usuario en especifico
	function buscar_login($nick){
		$sql="SELECT * FROM login WHERE nick= ?;";
		$query= $this->db->query($sql,array($nick));
		$item=array();
		foreach ($query->result_array() as $campo){
			$item['id_nivel']=$campo['id_nivel'];
			$item['id_carrera']=$campo['id_carrera'];
			$item['clave']=$campo['clave'];	//darle formato al array para que me funcione con el dropbox
		}
		
		return $item;
	}

	function buscar_telefono($id){
		$sql="SELECT *FROM telefono WHERE id_usuario=?;";
		$query=$this->db->query($sql,array($id));
		$item=array();
		foreach($query->result_array() as $campo){
			$item['id_telefono']=$campo['id_telefono'];
			$item['telefono']=$campo['telefono'];
		}
		return $item;
	}
	
	function actualizar_usuario($id,$nombre,$apellido,$dir,$email,$nick,$pass,$status,$carrera,$tipo,$nivel,$tel){
	
		$sql= "SELECT prc_modi_usuario(?,?,?,?,?,?,?,?,?,?,?,?);";
	
		/*if($tipo==1){
		 $nivel=1;
		}else{
		$nivel=2;
		}*/
	
		$query = $this->db->query($sql,array($id,$nombre,$apellido,$dir,$email,$nick,$pass,$status,$nivel,$carrera,$tipo,$tel));
	
		if($query->num_rows()>0){
			foreach ($query->result() as $fila){
				$data[]=$fila;
			}
			return $data;
		}
		else{
			$data[]="la consulta no pudo ser ejecutada";
			return $data;
		}
	}
	
	
	function obtener_busqueda_carrera(){
		$query= $this->db->query("SELECT * FROM carrera;");
		$item=array();
	
		foreach ($query->result_array() as $campo){
			$item[$campo['id_carrera']]=$campo['nombre_carrera'];	//darle formato al array para que me funcione con el dropbox
		}
	
		return $item;
	}
	
	function obtener_busqueda_nivel(){
		$query=$this->db->query("SELECT * FROM nivel;");
		$niveles=array();
		foreach($query->result_array() as $campo){
			$niveles[$campo['id_nivel']]=$campo['tipo'];
		}
		return $niveles;
	}
	
/////////////////////GENERAR LA VISTA///////////////////////////////////////////////////////////////////////////////	
	function generar_vista($nombre,$carrera,$tipo,$nivel){
		//cualquier nombre
		if($nombre==''){
			switch($tipo){
			//todos los usuarios
			case 0:
				//todos los niveles
				if($nivel=='0'){
					//todas las carreras
					if($carrera=='0'){
						$query=$this->db->query("SELECT * FROM vis_total");
						$resultado=$query->result_array();
						
					}// if carrera
					else{
						$sql="SELECT *FROM vis_total WHERE nombre_carrera= ?";
						$query=$this->db->query($sql,$carrera);	
						$resultado=$query->result_array();
					
						
					}//fin else carrera
					
				}//fin if nivel
				else{
					if($carrera=='0'){
						$sql="SELECT * FROM vis_total WHERE tipo= ?";
						$query=$this->db->query($sql,array($nivel));
						$resultado=$query->result_array();
					
						
					}// if carrera
					else{
						$sql="SELECT *FROM vis_total WHERE tipo= ? AND nombre_carrera= ?";
						$query=$this->db->query($sql,array($nivel,$carrera));
						$resultado=$query->result_array();
					
						
					}//fin else carrera
					
				}//else nivel
				
				break;
//--------------------------------------------------------------------------------------------------------------				
			//solo los dba
			case 1:
				//todos los niveles
				if($nivel=='0'){
					//todas las carreras
					if($carrera=='0'){
						$query=$this->db->query("SELECT * FROM vis_dba");
						$resultado=$query->result_array();
					
						
					}// if carrera
					else{
						$sql="SELECT *FROM vis_dba WHERE nombre_carrera= ?";
						$query=$this->db->query($sql,$carrera);
						$resultado=$query->result_array();
					
					
					}//fin else carrera
						
				}//fin if nivel
				else{
					if($carrera=='0'){
						$sql="SELECT * FROM vis_dba WHERE tipo= ?";
						$query=$this->db->query($sql,array($nivel));
						$resultado=$query->result_array();
					
						
					}// if carrera
					else{
						$sql="SELECT *FROM vis_dba WHERE tipo= ? AND nombre_carrera= ?";
						$query=$this->db->query($sql,array($nivel,$carrera));
						$resultado=$query->result_array();
					;
						
					}//fin else carrera
						
				}//else nivel
				
				break;
//-------------------------------------------------------------------------------------------------------------------				
			//solo los administradores	
			case 2:
				
				//todos los niveles
				if($nivel=='0'){
					//todas las carreras
					if($carrera=='0'){
						$query=$this->db->query("SELECT * FROM vis_admin");
						$resultado=array();
						$resultado=$query->result_array();
					
					}// if carrera
					else{
						$sql="SELECT *FROM vis_admin WHERE nombre_carrera= ?";
						$query=$this->db->query($sql,$carrera);
						$resultado=$query->result_array();
					
						
					}//fin else carrera
						
				}//fin if nivel
				else{
					if($carrera=='0'){
						$sql="SELECT * FROM vis_admin WHERE tipo= ?";
						$query=$this->db->query($sql,array($nivel));
						$resultado=$query->result_array();
					
					}// if carrera
					else{
						$sql="SELECT *FROM vis_admin WHERE tipo= ? AND nombre_carrera= ?";
						$query=$this->db->query($sql,array($nivel,$carrera));
						$resultado=$query->result_array();
					
					}//fin else carrera
						
				}//else nivel
				
				
			break;
			}//fin switch tipo
		}//if if nombre
//*************************************************************************************************************************		
		//buscar con el nombre especificado existe
		else{
			switch($tipo){
				//todos los usuarios
				case 0:
					//todos los niveles
					if($nivel=='0'){
						//todas las carreras
						if($carrera=='0'){
							$sql= "SELECT * FROM vis_total WHERE nombre like '%$nombre%' ;";
							$query=$this->db->query($sql);
							$resultado=$query->result_array();
							
							
						}// if carrera
						else{
							$sql="SELECT *FROM vis_total WHERE nombre_carrera= ? AND nombre like '%$nombre%'";
							$query=$this->db->query($sql,array($carrera));
							$resultado=array();
							$resultado=$query->result_array();
							
						}//fin else carrera
							
					}//fin if nivel
					else{
						if($carrera=='0'){
							$sql="SELECT * FROM vis_total WHERE tipo= ? AND nombre like '%$nombre%'";
							$query=$this->db->query($sql,array($nivel));
							$resultado=$query->result_array();
						
						}// if carrera
						else{
							$sql="SELECT *FROM vis_total WHERE tipo= ? AND nombre_carrera= ? AND nombre like '%$nombre%'";
							$query=$this->db->query($sql,array($nivel,$carrera));
							$resultado=$query->result_array();
						
						
						}//fin else carrera
							
					}//else nivel
			
					break;
					//--------------------------------------------------------------------------------------------------------------
					//solo los dba
				case 1:
					//todos los niveles
					if($nivel=='0'){
						//todas las carreras
						if($carrera=='0'){
							$sql="SELECT * FROM vis_dba WHERE nombre like '%$nombre%'";
							$query=$this->db->query($sql);
							$resultado=$query->result_array();
				
							
						}// if carrera
						else{
							$sql="SELECT *FROM vis_dba WHERE nombre_carrera= ? AND nombre like '%$nombre%'";
							$query=$this->db->query($sql,array($carrera));
							$resultado=$query->result_array();
							
						
						}//fin else carrera
			
					}//fin if nivel
					else{
						if($carrera=='0'){
							$sql="SELECT * FROM vis_dba WHERE tipo= ? AND nombre like '%$nombre%'";
							$query=$this->db->query($sql,array($nivel));
							$resultado=$query->result_array();
							return $resultado;
						
						}// if carrera
						else{
							$sql="SELECT *FROM vis_dba WHERE tipo= ? AND nombre_carrera= ? AND nombre like '%$nombre%'";
							$query=$this->db->query($sql,array($nivel,$carrera));
							$resultado=$query->result_array();
						
						
						}//fin else carrera
			
					}//else nivel
			
					break;
					//-------------------------------------------------------------------------------------------------------------------
					//solo los administradores
				case 2:
			
					//todos los niveles
					if($nivel=='0'){
						//todas las carreras
						if($carrera=='0'){
							$sql="SELECT * FROM vis_admin WHERE nombre like '%$nombre%'";
							$query=$this->db->query($sql);
						
							$resultado=$query->result_array();
						
							
						}// if carrera
						else{
							$sql="SELECT *FROM vis_admin WHERE nombre_carrera= ? AND nombre like '%$nombre%'";
							$query=$this->db->query($sql,array($carrera));
							
							$resultado=$query->result_array();
						
						
						}//fin else carrera
			
					}//fin if nivel
					else{
						if($carrera=='0'){
							$sql="SELECT * FROM vis_admin WHERE tipo= ? AND nombre like '%$nombre%'";
							$query=$this->db->query($sql,array($nivel));
							$resultado=$query->result_array();
						
							
						}// if carrera
						else{
							$sql="SELECT *FROM vis_admin WHERE tipo= ? AND nombre_carrera= ? AND nombre like '%$nombre%'";
							$query=$this->db->query($sql,array($nivel,$carrera));
							$resultado=$query->result_array();
							
							
						}//fin else carrera
			
					}//else nivel
			
			
					break;
			}//fin switch tipo
			
		}//fin else nombre
		
		return $resultado;
	}// fin function
	
	

}
?>