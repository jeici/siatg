<?php

class Trabajograduacion extends CI_Controller{
    function __construct() {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('trabajog_model');
        
        
        
        
       
    }
    
    function usuario(){
        
            
            $item1=$this->trabajog_model->obtener_asesor();
            $item2=$this->trabajog_model->obtener_observador();
                
            $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            $data['main_content']='form_ins_trabajog';
             $data['title']='Ingresar Trabajo de Graduacion';
             $data['item1']=$item1;
             $data['item2']=$item2;
            $this->load->view('includes/template',$data);

        
    }
    
    function recibir_datos(){
        $this->form_validation->set_rules('asesor', 'carnet de asesor', 'required');
        $this->form_validation->set_rules('observador', 'carnet observador', 'required');
        $this->form_validation->set_rules('tema', 'tema', 'required');
        $this->form_validation->set_rules('grupo', 'grupo', 'required');
        $this->form_validation->set_message('required', 'este campo es requerido');
        if ($this->form_validation->run() == FALSE)
        {
            $this->usuario();
        }
        else{
            
            $this->load->model('trabajog_model');
            echo 'correcto';
            $a1 = $this->input->post('asesor');
            $a2 = $this->input->post('observador');
            $a3 = $this->input->post('tema');
            $a4 = $this->input->post('grupo');
            $a5 = $this->input->post('observacion_tg');
            $a6 = $this->input->post('nota_final');
            $a7 = $this->input->post('estado');
            $a8 = $this->input->post('avance');
            $this->trabajog_model->agregar_trabajog($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8);
        }  
        
        
        
    }
    
}

?>
