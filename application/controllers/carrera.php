<?php

class Carrera extends CI_Controller{
    function __construct() {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        
        
        
        
       
    }
    
    function usuario(){
        
                                 
            $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            $data['main_content']='form_ins_carrera';
            $data['title']='Ingresar Carreras';
            
            $data['item2']=0;
            $data['item']=0;
            
            $this->load->view('includes/template',$data);

        
    }
    
    function recibir_datos(){
        $this->form_validation->set_rules('nombrec', 'carnet de asesor', 'required');
        $this->form_validation->set_rules('codigo', 'carnet observador', 'required');
        $this->form_validation->set_message('required', 'este campo es requerido');
        if ($this->form_validation->run() == FALSE)
        {
            $this->usuario();
        }
        else{
            
            $this->load->model('carrera_model');
            echo 'correcto';
            $a1 = $this->input->post('nombrec');
            $a2 = $this->input->post('codigo');
            
            $this->carrera_model->agregar_carrera($a1,$a2);
        }  
        
        
        
    }
    
}

?>