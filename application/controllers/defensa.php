<?php

class Defensa extends CI_Controller{
    function __construct() {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('defensa_model');
        
        
        
        if($this->session->userdata['username'] == TRUE)
                {
        
        //$this->session->sess_destroy();
                }
           else{
                    echo 'No estas LOGEADO';
                    redirect(base_url());
               //$this->session->sess_destroy();
           }
       
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
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tg', 'tema de trabajo de graduacion', 'required');
        //$this->form_validation->set_rules('datepicker', 'fecha defensa', 'required');
        //$this->form_validation->set_rules('numdefensa', 'numero de defensa', 'required');
        //$this->form_validation->set_rules('inidefensa', 'hora inicio', 'required|');
        //$this->form_validation->set_message('required', 'este campo es requerido');
       
        $this->form_validation->set_rules('datepicker', 'Fecha defensa', 'trim|required|xss_clean');
        if (($this->form_validation->run() == FALSE) or ($this->input->post('inidefensa') > $this->input->post('findefensa')))
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
            printf($a5 = $this->input->post('findefensa'));
            print_r($a6 = $this->input->post('nombreu'));
            printf($a7 = $this->input->post('local'));
            
                        
            $this->defensa_model->agregar_defensa($a1,$a2,$a3,$a4,$a5,$a6,$a7);
            //$this->usuario();
        }  
        
        
        
    }
    
    /*modificar  defensa*/
    function seleccionar_def(){
        
            $this->load->model('defensa_model');
            $nivel= $this->defensa_model->obtener_def();
            
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_mod_def';
		$data['title']='Modificar Defensa';
                $data['nivel']=$nivel;
		$this->load->view('includes/templatej',$data);       
		
	}
     function modificar_def(){
         
                $id = $this->input->post('id');
                $this->load->model('defensa_model');
                $nivel= $this->defensa_model->obtener_id($id);
                
                $data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_mod_def2';
		$data['title']='Modificar Defensa';
                $data['nivel']=$nivel;
		$this->load->view('includes/templatej',$data);  
                       
                
                /*foreach ($query->result_array()  as $campo){
			
                        $a1=$campo['id_nivel'];
                        $a2=$campo['tipo']; 
                        }*/
     }
     
     function modificar_def2(){
         
                $this->load->model('defensa_model');
                $a1 = $this->input->post('id_defensa');
                $a2 = $this->input->post('id_trabajog');
                $a3 = $this->input->post('fecha_defensa');
                $a4 = $this->input->post('num_defensa');
                $a5 = $this->input->post('ini_defensa');
                $a6 = $this->input->post('fin_defensa');
                
                echo 'correcto';
                
                $this->defensa_model->modificar_def($a1,$a2,$a3,$a4,$a5,$a6);
                
     }
     
      function consultar_def(){
        
            $this->load->model('defensa_model');
            $nivel= $this->defensa_model->obtener_def();
            
		$data['title']='SISTEMA DE ADMINISTRACION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el
		//header en el tag title
		$data['main_content']='form_consultar_def';
		$data['title']='Modificar Defensa';
                $data['nivel']=$nivel;
		$this->load->view('includes/templatej',$data);       
		
	}
    
}

?>
