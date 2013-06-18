<?php

class Nota extends CI_Controller{
    function __construct() {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('nota_model');
        
        
        
        
       
    }
    
    function usuario(){
        
            
            $item1=$this->nota_model->obtener_defensa();
            $item2=$this->nota_model->obtener_trabajog();
            
                
            $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            $data['main_content']='form_ins_nota';
             $data['title']='Ingresar notas';
             $data['item1']=$item1;
             $data['item2']=$item2;
             
             $data['item']=0;
             
            $this->load->view('includes/template',$data);

        
    }
    
    function recibir_datos(){
        $this->form_validation->set_rules('id_defensa', 'carnet de asesor', 'required');
        $this->form_validation->set_rules('id_trabajog', 'carnet observador', 'required');
        $this->form_validation->set_rules('nota', 'carnet observador', 'required');
        $this->form_validation->set_message('required', 'este campo es requerido');
        if ($this->form_validation->run() == FALSE)
        {
            $this->usuario();
        }
        else{
            
            $this->load->model('nota_model');
            echo 'correcto';
            $a1 = $this->input->post('id_defensa');
            $a2 = $this->input->post('id_trabajog');
            $a3 = $this->input->post('nota');
            
            $this->nota_model->agregar_nota($a1,$a2,$a3);
        }  
        
        
        
    }
    /*modificar trabajograd uacion*/
    
    
}

?>
