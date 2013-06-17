<?php

class Defensa extends CI_Controller{
    function __construct() {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('defensa_model');
        
        
        
        
       
    }
    
    function usuario(){
        
            
            $item1=$this->defensa_model->obtener_trabajog();
            
            
                
            $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            $data['main_content']='form_ins_defensa';
             $data['title']='Ingresar Defensa';
             $data['item1']=$item1;
                          
             $data['item']=0;
             $data['item2']=0;
             
            $this->load->view('includes/template',$data);

        
    }
    
    function recibir_datos(){
        $this->form_validation->set_rules('tg', 'tema de trabajo de graduacion', 'required');
        $this->form_validation->set_rules('datepicker', 'fecha defensa', 'required');
        $this->form_validation->set_rules('numdefensa', 'numero de defensa', 'required');
        $this->form_validation->set_message('required', 'este campo es requerido');
        if ($this->form_validation->run() == FALSE)
        {
            $this->usuario();
        }
        else{
            
            $this->load->model('defensa_model');
            echo 'correcto';
            $a1 = $this->input->post('tg');
            $a2 = $this->input->post('datepicker');
            $a3 = $this->input->post('numdefensa');
            $a4 = $this->input->post('inidefensa');
            $a5 = $this->input->post('findefensa');
            
                        
            $this->defensa_model->agregar_defensa($a1,$a2,$a3,$a4,$a5);
        }  
        
        
        
    }
    
}

?>
