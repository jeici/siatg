<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Tutorial_model extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this ->load->database();
	}
        
        function listar_asesorias(){
            $consulta = $this->db->query("SELECT * FROM asesoria; ");
             $a=0;           
            if($consulta->num_rows()>0){
			foreach ($consulta->result() as $fila){
			  $lista_ase[$a]['id_a']=$fila->id_asesoria;
                          $lista_ase[$a]['id_tg']=$fila->id_trabajog;
                          $lista_ase[$a]['num_a']=$fila->num_asesoria;
                          $lista_ase[$a]['fe_ase']=$fila->fecha_asesoria;
                          $lista_ase[$a]['ho_ase']=$fila->hora_asesoria;
                          $a++;
                          }
            }
            return $lista_ase;
        }
}
?>
