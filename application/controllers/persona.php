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
              

                
                if($this->session->userdata['username'] == TRUE)
                {
        echo $this->session->userdata['username'];
        echo "</t>";
        echo $this->session->userdata['password'];
        //$this->session->sess_destroy();
                }
           else{
                    echo 'No estas LOGEADO';
                    redirect(base_url());
               //$this->session->sess_destroy();
           }
                
	}

	function index(){
            $item=$this->per->obtener_tg();
            $item2=$this->per->obtener_carrera();
            $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            $data['main_content']='form_persona';
             $data['title']='Ingresar Persona';
             $data['item']=$item; //asigno el array dentro de la variable data
             $data['item2']=$item2;
            $this->load->view('includes/template',$data); 
             
             //$this->load->view('includes/template2',$data);
            
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
              $title= $this->input->post('titulo');
              $trabg = $this->input->post('tg');
              $telef = $this->input->post('telefono');
              $car = $this->input->post('carrera');
              $tipe2 = $this->input->post('Tipo2');
              
              
              
              
	    // $this->verificar_datos_persona();
 $insert = $this->per->agregar_persona($carn,$car,1,$nombs,$apell,$dire, $mail,$state,$tipe,$tipe2,$title,$trabg,$telef);
                                       
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
              $tipe2 = $this->input->post('Tipo2');
           $insert = $this->per->agregar_persona($carn,1,1,$nombs,$apell,$dire, $mail,$state,$tipe,$tipe2);
                                                
            
              
         foreach ($insert as $valor)
         {
            echo $valor->prc_ins_persona;
            
         }
            }
           }
        //martin
        //funcion para escoger que tipo de usuario se modificara
	function seleccionar_tipo(){
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_tipo_per';
		$data['title']='Modificar Persona';
		$this->load->view('includes/template3',$data);
        }
        //recupera todos los usuarios de la tabla dba o administrador
	function recuperar_persona(){
		$tipo= $this->input->post('tipo');
		
		if($tipo==1){
			$users= $this->per->obtener_docente();
		}
		else
			$users=$this->per->obtener_estudiante();	
	
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_per';//user
		$data['title']='Modificar Persona';
		$data['users']=$users;
		$data['tipo']=$tipo;
		$this->load->view('includes/template4',$data);
	}
	
		
	
        
        //llena el formulario modificacion
	function modificar_per(){
		$carnet=$this->input->post('id');
		$tipo=$this->input->post('tipo');
		$niveles=$this->per->obtener_tg();
		$item=$this->per->obtener_carrera();
		//echo $carnet;
		//echo $tipo;
		$tg= 0;
		//print_r($niveles);
		if($tipo == 1){
			$user= $this->per->buscar_docente($carnet);
			//print_r($user);
			
			
		}
		if($tipo== 2){
			$user=$this->per->buscar_estudiante($carnet);
			//$tg=$this->per->buscar_tg($user['tg']);	
			//print_r($user);
			
		}
			//$tg=$this->per->buscar_tg($user['tg']);
			$telefono=$this->per->buscar_telefono($user['id_telefono']);
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_modi_per';
		$data['title']='Modificar Persona';
		$data['id']=$carnet; 
		$data['tipo']=$tipo; 
		$data['user']=$user; 
		$data['item']=$item; 
		$data['tg']=$niveles; 
		//$data['trabajo']=$tg; 
		$data['telefono']=$telefono;
		$this->load->view('includes/template7',$data);
		
	}
        
         function actualizar_persona()
	  {
            
            
            //////////////////////////////////////////
	      $carn = $this->input->post('carnet');
	      $nombs = $this->input->post('nombres');
	      $apell = $this->input->post('apellidos');
	      $dire = $this->input->post('direccion');
	      $mail = $this->input->post('correo');
	      $state = $this->input->post('estado');
              $tipe = $this->input->post('Tipo');
              $title= $this->input->post('titulo');
              $trabg = $this->input->post('tg');
              $telef = $this->input->post('telefono');
              $car = $this->input->post('carrera');
              $tipe2 = $this->input->post('Tipo2');
              $idtelef=$this->input->post('idtel');
              
              
              
              
	    // $this->verificar_datos_persona();
 $insert = $this->per->actualizar_persona($carn,$car,$idtelef,$nombs,$apell,$dire, $mail,$state,$tipe,$tipe2,$title,$trabg,$telef);
                                       
         foreach ($insert as $valor)
         {
            echo $valor->prc_mod_persona;
            
         }
            
	  }
       
          //funcion para escoger que tipo de usuario se modificara
	function  consultar_tipo(){
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_consultartipo_per';
		$data['title']='Consultar Persona';
		$this->load->view('includes/template3',$data);
        }
        
        //recupera todos los usuarios de la tabla dba o administrador
	function consultar_persona(){
		$tipo= $this->input->post('tipo');
		
		if($tipo==1){
			$users= $this->per->obtener_docente();
		}
		else
			$users=$this->per->obtener_estudiante();	
	
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_consultar_per';//user
		$data['title']='Consultar Persona';
		$data['users']=$users;
		$data['tipo']=$tipo;
		$this->load->view('includes/template4',$data);
	}
}
?>
