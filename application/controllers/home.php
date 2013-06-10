<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		//$this->load->helper('form');
		//$this->load->model('persona_model','per',TRUE);

	}
        
        function index(){
            $data['main_content']='contenido2';// este array hace referencia a la variable $main_content del template.php
            $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el header en el tag title
            $this->load->view('includes/template',$data);
		//la library solo sera accesible desde la funciion index
		//antes de ejecutar la funcion construir menu es necesario crear una variable para
		//pasarle a la vista
	}

//antes de ejecutar la funcion construir menu es necesario crear una variable para
}		//pasarle a la vista
	
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
