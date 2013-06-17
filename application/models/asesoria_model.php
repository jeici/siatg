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
  ////funciones para modificar//////////////
        function mensajes()
{        
    $query = $this->db->get('asesoria');
        foreach ($query->result() as $fila)
        {
            $data[] = $fila;
        }
    return $data;
}
 
    //obtenemos la fila completa del mensaje a editar
    //vemos que como solo queremos una fila utilizamos
    //la función row que sólo nos devuelve una fila,
    //así la consulta será más rápida
    function obtener($id) {
        $this->db->where('id_asesoria', $id);
        $query = $this->db->get('asesoria');
        $fila = $query->row();
     
        return $fila;
    }
 
    //actualizamos los datos en la base de datos con el patrón
    //active record de codeIginiter, recordar que no hace falta
    //escapar las consultas ya que lo hace él automaticámente
    function actualizar_mensaje($id, $idtg, $n_as, $fec_as, $hor_ase) {
        $data = array(
            
            'id_trabajog' => $idtg,
            
            'num_asesoria' => $n_as,
            'fecha_asesoria' => $fec_as,
            'hora_asesoria' => $hor_ase
        );
        $this->db->where('id_asesoria', $id);
        return $this->db->update('asesoria', $data);
    }

/*application/models/datos_model.php
* el modelo datos_model.php
*/


}
?>