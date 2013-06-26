<?php

class Asesoria extends CI_Controller{
    function __construct() {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('asesoria_model','ase',TRUE);
        
        
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
    
    function index(){
        
            
           $item=$this->ase->obtener_tg();//aqui se define item
           $item2=0;
               
            $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            $data['main_content']='form_ins_asesoria';
             $data['title']='Ingresar Asesoria';
             $data['item']=$item;
             $data['item2']=$item2;
            $this->load->view('includes/template',$data);

        
    }
    
    function guardar_asesoria(){
        
           $cod_tg = $this->input->post('tg');
           //$nase = $this->input->post('fecha');
            $fase = $this->input->post('datepicker');
            $horase = $this->input->post('hora');
           
            
          $insert = $this->ase->agregar_asesoria(1,1,$fase,$horase);
                                       
         foreach ($insert as $valor)
         {
            echo $valor->prc_ins_asesoria;
            
         }
            
	  }
          
    function to_pdf(){         
$this->load->database();
            
//$this->load->helper('pdf_helper');
$this->load->library('pdf');
$this->pdf->load_view('home_view');
$this->pdf->render();
$this->pdf->stream("welcome.pdf");
    }
                                                                    
        
        
        
    
     function datosenviados(){
            print_r($_POST);
     }
}

?>
