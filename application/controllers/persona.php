<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Persona extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
                $this->load->helper('form');
                $this->load->library('form_validation');
//$this->load->model('persona_model','per',TRUE);

	}

	function index(){
            $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            $data['main_content']='form_persona';
             $data['title']='Ingresar Persona';
            $this->load->view('includes/template',$data); 
            
           // $data['main_content']='contenido2';// este array hace referencia a la variable $main_content del template.php
           // $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el header en el tag title
            //$this->load->view('includes/template',$data);
	}
        function datosenviados(){
            print_r($_POST);
        }    
        function ingresar_persona(){
            $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            $data['main_content']='form_persona';
             $data['title']='Ingresar Persona';
            $this->load->view('includes/template',$data); 
        }
        
        
}
?>
