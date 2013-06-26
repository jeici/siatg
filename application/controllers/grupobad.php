<?php
//if (!defined('BASEPATH')) exit('No direct script access allowed');
class Usuario extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model('grupobad_model',TRUE);

	}

 function index()
 {
  
   //$this->load->view('login_view');
   $data['main_content']='grupobad_view';
   $data['title']='Integrantes Grupo 11';
   $this->load->view('includes/template3',$data);
 }
	}
?>