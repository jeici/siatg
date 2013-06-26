<?php

class Carrera extends CI_Controller{
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
    
    /*modificar carrera*/
    function seleccionar_carr(){
        
            $this->load->model('carrera_model');
            $nivel= $this->carrera_model->obtener_carr();
            
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_mod_carr';
		$data['title']='Modificar Carrera';
                $data['nivel']=$nivel;
		$this->load->view('includes/templatej',$data);       
		
	}
     function modificar_carr(){
         
                $id = $this->input->post('id');
                $this->load->model('carrera_model');
                $nivel= $this->carrera_model->obtener_id($id);
                
                $data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_mod_carr2';
		$data['title']='Modificar Carrera';
                $data['nivel']=$nivel;
		$this->load->view('includes/templatej',$data);  
                       
                
                /*foreach ($query->result_array()  as $campo){
			
                        $a1=$campo['id_nivel'];
                        $a2=$campo['tipo']; 
                        }*/
     }
     
     function modificar_carr2(){
         
                $this->load->model('carrera_model');
                $a1 = $this->input->post('id_carrera');
                $a2 = $this->input->post('nombre_carrera');
                $a3 = $this->input->post('codigo');
                
                
                echo 'correcto';
                
                $this->carrera_model->modificar_carr($a1,$a2,$a3);
                
     }
     
     function consultar_carr(){
        
            $this->load->model('carrera_model');
            $nivel= $this->carrera_model->obtener_carr();
            
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_consultar_carr';
		$data['title']='Modificar Carrera';
                $data['nivel']=$nivel;
		$this->load->view('includes/templatej',$data);       
		
	}
    
}

?>