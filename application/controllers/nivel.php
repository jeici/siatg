<?php

class Nivel extends CI_Controller{
    function __construct() {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        
        
        
    }
    
    function usuario(){
        $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            $data['main_content']='form_ins_nivel';
             $data['title']='Ingresar Nivel';
            $this->load->view('includes/template',$data);
    }
    
    function recibir_datos(){
        
        $this->form_validation->set_rules('tipo', 'Tipo de usuario', 'required');
        $this->form_validation->set_message('required', 'este campo es requerido');
        if ($this->form_validation->run() == FALSE)
        {
            $this->usuario();
        }
        else{
            
            $this->load->model('nivel_model');
            echo 'correcto';
            
            $tip = $this->input->post('tipo');
            $this->nivel_model->agregar_nivel($tip);
        }  
        
        
        
    }
    
}
?>
