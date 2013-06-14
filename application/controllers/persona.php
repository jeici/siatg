<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Persona extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
             // $this->load->model('persona_model','per',TRUE);
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->load->model('persona_model','per',TRUE);

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
        
        function guardar_persona()
	  {
            
            
            //////////////////////////////////////////
	      $carn = $this->input->post('carnet');
	      $nombs = $this->input->post('nombres');
	      $apell = $this->input->post('apellidos');
	      $dire = $this->input->post('direccion');
	      $mail = $this->input->post('correo');
	      $state = $this->input->post('estado');
              $tipe = $this->input->post('Tipo');
            
             
              
              
              
              
	    // $this->verificar_datos_persona();
 $insert = $this->per->agregar_persona($carn,1,1,$nombs,$apell,$dire, $mail,$state,$tipe);
            
         foreach ($insert as $valor)
         {
            echo $valor->prc_ins_persona;
            
         }
            
	  }
          
          function verificar_datos_persona(){
            $this->form_validation->set_rules('carnet','Carnet','required|trim|min_length[7]');
            $this->form_validation->set_rules('nombres','Nombres','required|trim');
            $this->form_validation->set_rules('apellidos','Apellidos','required|trim'); 
            $this->form_validation->set_rules('direccion','Direccion','required|trim'); 
            $this->form_validation->set_rules('correo','Correo','trim|required|valid_email'); 
            $this->form_validation->set_rules('titulo','Titulo','required|trim'); 
            $this->form_validation->set_message('required','Este campo es requerido');
            $this->form_validation->set_message('min_length','El número mínimo de caracteres es de 7');
            $this->form_validation->set_message('valid_email','La dirección de correo no es válida');
            if($this->form_validation->run()==FALSE)
            {
                $this->index();
            }
            else{
            $this->load->model('persona_model');
            echo 'correcto';
            }
          }
          
           function saveval_persona(){
            $this->form_validation->set_rules('carnet','Carnet','required|trim|min_length[7]');
            $this->form_validation->set_rules('nombres','Nombres','required|trim');
            $this->form_validation->set_rules('apellidos','Apellidos','required|trim'); 
            $this->form_validation->set_rules('direccion','Direccion','required|trim'); 
            $this->form_validation->set_rules('correo','Correo','trim|required|valid_email'); 
            $this->form_validation->set_rules('titulo','Titulo','required|trim'); 
            $this->form_validation->set_message('required','Este campo es requerido');
            $this->form_validation->set_message('min_length','El número mínimo de caracteres es de 7');
            $this->form_validation->set_message('valid_email','La dirección de correo no es válida');
            if($this->form_validation->run()==FALSE)
            {
                $this->index();
            }
            else{
            $this->load->model('persona_model');
            echo 'correcto';
            $carn = $this->input->post('carnet');
	      $nombs = $this->input->post('nombres');
	      $apell = $this->input->post('apellidos');
	      $dire = $this->input->post('direccion');
	      $mail = $this->input->post('correo');
	      $state = $this->input->post('estado');
              $tipe = $this->input->post('Tipo');
           $insert = $this->per->agregar_persona($carn,1,1,$nombs,$apell,$dire, $mail,$state,$tipe);
            
            
              
         foreach ($insert as $valor)
         {
            echo $valor->prc_ins_persona;
            
         }
            }
           }
        
}
?>
