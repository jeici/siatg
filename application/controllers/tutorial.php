<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Tutorial extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
             // $this->load->model('persona_model','per',TRUE);
                $this->load->helper('url');
                $this->load->helper('form');
                $this->load->library('form_validation');
               // $this->load->model('persona_model','per',TRUE);
              

	}


	
	
	function index() 
	{	
		$data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            $data['main_content']='form_asesoria_to_pdf';
             $data['title']='Listado de Asesorias';
            $this->load->view('includes/template',$data); 
	}


	function hello_world()
	{
		$this->load->library('cezpdf');

		$this->cezpdf->ezText('Hello World', 12, array('justification' => 'center'));
		$this->cezpdf->ezSetDy(-10);

		$content = 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog.
					Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs.';

		$this->cezpdf->ezText($content, 10);

		$this->cezpdf->ezStream();
	}
	
	
	function tables()
	{
		$this->load->library('cezpdf');

		$db_data[] = array('name' => 'Jon Doe', 'phone' => '111-222-3333', 'email' => 'jdoe@someplace.com');
		$db_data[] = array('name' => 'Jane Doe', 'phone' => '222-333-4444', 'email' => 'jane.doe@something.com');
		$db_data[] = array('name' => 'Jon Smith', 'phone' => '333-444-5555', 'email' => 'jsmith@someplacepsecial.com');
		
		$col_names = array(
			'name' => 'Name',
			'phone' => 'Phone Number',
			'email' => 'E-mail Address'
		);
		
		$this->cezpdf->ezTable($table_data, $col_names, 'Contact List', array('width'=>550));
		$this->cezpdf->ezStream();
	}

	
	function headers()
	{
		$this->load->library('cezpdf');
		$this->load->helper('pdf');
		
		prep_pdf(); // creates the footer for the document we are creating.

		$db_data[] = array('name' => 'Jon Doe', 'phone' => '111-222-3333', 'email' => 'jdoe@someplace.com');
		$db_data[] = array('name' => 'Jane Doe', 'phone' => '222-333-4444', 'email' => 'jane.doe@something.com');
		$db_data[] = array('name' => 'Jon Smith', 'phone' => '333-444-5555', 'email' => 'jsmith@someplacepsecial.com');
		
		$col_names = array(
			'name' => 'Name',
			'phone' => 'Phone Number',
			'email' => 'E-mail Address'
		);
		
		$this->cezpdf->ezTable($db_data, $col_names, 'Contact List', array('width'=>550));
		$this->cezpdf->ezStream();
	}
        
        public function genera_pdf(){
            $this->load->database();
            $this->load->library('cezpdf');
            $this->load->helper('pdf_helper');
            prep_pdf();
            $this->cezpdf->ezText('<b>Universidad de El Salvador</b> 12');
            $this->cezpdf->ezText('<b>Cliente:</b> Abraham Zenteno Sanchez');
            $this->cezpdf->ezText('<b>Tienda:</b>  Plaza Dorada');
            $this->cezpdf->ezText('<b>Fecha y hora de impresion:</b> '.date('Y-m-d').', '.date('H:i').' hrs.');
            $this->cezpdf->ezText('');
            
            $this->load->model('tutorial_model');
            $lista_ase=  $this->tutorial_model->listar_asesorias();
            foreach ($lista_ase as $valor)
         {
           $db_data[] = array('id_as' =>$valor['id_asesoria'],'id_trg' => $valor['id_trabajog'],'num_as' => $valor['num_asesoria'],'fec_ase'=> $valor['fecha_asesoria'],'hor_ase','ADD' => $valor['hora_asesoria'] );// $db_data[] = array('eye' => 'O.D.','ESF' => '+9.75','CIL' => '-1.25','EJE' => '3','ADD' => '+2.50','REF' => 'D.I. 4 mm');
           
         }
            
            
   
            $col_names = array(
                'id_as' => 'ID_Asesoria',
                'id_trg' => 'ID Trabajo de Graduación',
                'num_as' => 'Numero Asesoría',
                'fec_ase' => 'Fecha Asesoría',
                'hor_ase' => 'Hora_asesoría',
                  
            );
   
            $this->cezpdf->ezTable($db_data, $col_names, 'Lista de Asesorías', array('width'=>550));
           
            $this->cezpdf->ezStream(array('Content-Disposition'=>'nama_file.pdf'));

}
 function datosenviados(){
            print_r($lista_ase);
        }  
}
?>