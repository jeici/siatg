<?php

class Inicio extends CI_Controller{
    function __construct() {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('inicio_model');
        
        
        
        
        
       
    }
    
    function usuario(){
        
            $id_nivel=$this->inicio_model->agregar_inicio();
            printf($nivel=$id_nivel[0]->id_nivel);
           if ($nivel==1){
               
                    $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            
            $data['main_content']='form_inicio';
             $data['title']='DBA';
             $data['item1']=0;
                          
             $data['item']=0;
             $data['item2']=0;
             
            $this->load->view('includes/template',$data);
               
           } 
           if ($nivel==2)
           {
               $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            
            $data['main_content']='form_inicio';
             $data['title']='ADMIN';
             $data['item1']=0;
                          
             $data['item']=0;
             $data['item2']=0;
             
            $this->load->view('includes/template_admin',$data);
           }
            

        
    }
    
       
}

?>
