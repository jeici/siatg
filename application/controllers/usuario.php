<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Usuario extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('usuario_model','usuario',TRUE);
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('usuario_model','usuario',TRUE);

	}

	function index(){
		
		//obtengo los id y nombres de la carrera
		$item=$this->usuario->obtener_carrera();
		$niveles=$this->usuario->obtener_nivel();
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_usuario';
		$data['title']='Ingresar Usuario';
		$data['item']=$item; //asigno el array dentro de la variable data
		$data['nivel']=$niveles; //asigno el array nivel dentro de la variable data
		$this->load->view('includes/template2',$data);


		// $data['main_content']='contenido2';// este array hace referencia a la variable $main_content del template.php
		// $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el header en el tag title
		//$this->load->view('includes/template',$data);
	}
	function datosenviados(){
		print_r($_POST);
	}
	function ingresar_usuario(){
		$item=$this->usuario->obtener_carrera();
		$niveles=$this->usuario->obtener_nivel();
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_usuario';
		$data['title']='Ingresar Usuario';
		$data['item']=$item; //asigno el array dentro de la variable data
		$data['nivel']=$niveles; //asigno el array nivel dentro de la variable data
		$this->load->view('includes/template2',$data);

	}

	function guardar_usuario()
	{
		$nombre = $this->input->post('nombres');
		$apellido = $this->input->post('apellidos');
		$dir = $this->input->post('direccion');
		$email = $this->input->post('correo');
		$nick = $this->input->post('nick');
		$pass= $this->input->post('pass');
		$status = $this->input->post('estado');
		$carrera=$this->input->post('carrera');
		$tipo = $this->input->post('tipo');
		$nivel=$this->input->post('nivel');
		$tel=$this->input->post('tel');






		// $this->verificar_datos_persona();
		$insert = $this->usuario->agregar_usuario($nombre,$apellido,$dir,$email,$nick,$pass,$status,$carrera,$tipo,$nivel,$tel);

		foreach ($insert as $valor)
		{
			echo $valor->prc_ins_usuario;

		}
		
	}

	function verificar_datos_usuario(){
		$this->form_validation->set_rules('nombres','Nombres','required|trim|');
		$this->form_validation->set_rules('apellidos','Apellidos','required|trim');
		$this->form_validation->set_rules('direccion','Direccion','required|trim');
		$this->form_validation->set_rules('correo','Correo','trim|required|valid_email');
		$this->form_validation->set_rules('tel','Telefono','required|trim|min_length[7]');
		$this->form_validation->set_message('required','Este campo es requerido');
		//$this->form_validation->set_message('min_length','El número mínimo de caracteres es de 7');
		$this->form_validation->set_message('valid_email','La dirección de correo no es válida');
		if($this->form_validation->run()==FALSE)
		{
			$this->index();
		}

	}
	//funcion para escoger que tipo de usuario se modificara
	function seleccionar_tipo(){
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_tipo';
		$data['title']='Modificar Usuario';
		$this->load->view('includes/template3',$data);
		
	}
	
	//recupera todos los usuarios de la tabla dba o administrador
	function recuperar_usuario(){
		$tipo= $this->input->post('tipo');
		
		if($tipo==1){
			$users= $this->usuario->obtener_dba();
		}
		else
			$users=$this->usuario->obtener_admin();	
	
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_user';
		$data['title']='Modificar Usuario';
		$data['users']=$users;
		$data['tipo']=$tipo;
		$this->load->view('includes/template4',$data);
	}
	
	//llena el formulario modificacion
	function modificar_user(){
		$id=$this->input->post('id');
		$tipo=$this->input->post('tipo');
		$item=$this->usuario->obtener_carrera();
		$niveles=$this->usuario->obtener_nivel();
		//echo $id;
		//echo $tipo;
		if($tipo==1){
			$user= $this->usuario->buscar_dba($id);
			$login=$this->usuario->buscar_login($user['nick']);
		}
		else
			$user=$this->usuario->buscar_admin($id);
			$login=$this->usuario->buscar_login($user['nick']);
			$telefono=$this->usuario->buscar_telefono($id);
		
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_modi_user';
		$data['title']='Modificar Usuario';
		$data['id']=$id; // el id del usuario recuperado
		$data['tipo']=$tipo; //tipo si es admin o dba el usuario recuperado
		$data['user']=$user; //asigna los datos de la tabla dba o administrador para que se usen en el formulario
		$data['item']=$item; //asigno el array dentro de la variable data
		$data['nivel']=$niveles; //asigno el array nivel dentro de la variable data
		$data['login']=$login; //asigna a array los campos de la tabla login del usuario seleccionado.
		$data['telefono']=$telefono;
		$this->load->view('includes/template5',$data);
		
	}
	
	function actualizar_usuario(){
		
		$id=$this->input->post('id');
		$nombre = $this->input->post('nombres');
		$apellido = $this->input->post('apellidos');
		$dir = $this->input->post('direccion');
		$email = $this->input->post('correo');
		$nick = $this->input->post('nick');
		$pass= $this->input->post('pass');
		$status = $this->input->post('estado');
		$carrera=$this->input->post('carrera');
		$tipo = $this->input->post('tipo');
		$nivel=$this->input->post('nivel');
		$tel=$this->input->post('tel');
		
		$insert = $this->usuario->actualizar_usuario($id,$nombre,$apellido,$dir,$email,$nick,$pass,$status,$carrera,$tipo,$nivel,$tel);
		
		foreach ($insert as $valor)
		{
			echo $valor->prc_modi_usuario;
		
		}
	}

}
?>