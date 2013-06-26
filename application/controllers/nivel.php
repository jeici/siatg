<?php

class Nivel extends CI_Controller{
    function __construct() {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        
        
        
        if($this->session->userdata['username'] == TRUE)
                {
        echo $this->session->userdata['username'];
        echo "</t>";
        echo $this->session->userdata['password'];
        //$this->session->sess_destroy();
                }
           else{
                    echo 'No estas LOGEADO';
                    redirect(base_url());
               //$this->session->sess_destroy();
           }
        
        
    }
    
    function usuario(){
        $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el  tag title
            $data['main_content']='form_ins_nivel';
             $data['title']='Ingresar Nivel';
             
             $data['item2']=0;
             $data['item']=0;
             
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
    /*modificar nivel*/
    function seleccionar_nivel(){
        
            $this->load->model('nivel_model');
            $nivel= $this->nivel_model->obtener_nivel();
            
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_mod_nivel';
		$data['title']='Modificar Nivel';
                $data['nivel']=$nivel;
		$this->load->view('includes/templatej',$data);       
		
	}
     function modificar_nivel(){
         
                $id = $this->input->post('id');
                $this->load->model('nivel_model');
                $nivel= $this->nivel_model->obtener_id($id);
                
                $data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_mod_nivel2';
		$data['title']='Modificar Nivel';
                $data['nivel']=$nivel;
		$this->load->view('includes/templatej',$data);  
                       
                
                /*foreach ($query->result_array() as $campo){
			
                        $a1=$campo['id_nivel'];
                        $a2=$campo['tipo']; 
                        }*/
     }
     
     function modificar_nivel2(){
         
                $this->load->model('nivel_model');
                $id = $this->input->post('id_nivel');
                $tipo = $this->input->post('tipo');
                echo 'correcto';
                printf($id);
                printf($tipo);
                $this->nivel_model->modificar_nivel($id,$tipo);
                
     }
     
     function consultar_nivel(){
        
            $this->load->model('nivel_model');
            $nivel= $this->nivel_model->obtener_nivel();
            
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_consultar_nivel';
		$data['title']='Modificar Nivel';
                $data['nivel']=$nivel;
		$this->load->view('includes/templatej',$data);       
		
	}
    
}
?>
