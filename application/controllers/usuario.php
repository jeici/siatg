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






		// $this->verificar_datos_persona();
		$insert = $this->usuario->agregar_usuario($nombre,$apellido,$dir,$email,$nick,$pass,$status,$carrera,$tipo,$nivel);

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
		$this->form_validation->set_message('required','Este campo es requerido');
		//$this->form_validation->set_message('min_length','El número mínimo de caracteres es de 7');
		$this->form_validation->set_message('valid_email','La dirección de correo no es válida');
		if($this->form_validation->run()==FALSE)
		{
			$this->index();
		}

	}
	
	

}
?>