<?php
class Datos_upd_ase extends CI_Controller
{    
    function __construct()
    {        
         parent::__construct();        
         $this->load->model('asesoria_model');
         $this->load->helper('form');
         $this->load->helper('url');
         
    }
 
    function index()
    {
        $data['titulo'] = 'Modificar Asesoria';
        $data['main_content']='datos_view_ase';
        $data['mensajes'] = $this->asesoria_model->mensajes();
        $this->load->view('datos_view_ase',$data);
        //$this->load->view('includes/template',$data); 
    }
 
    //función encargada de mostrar los formularios por ajax
    //dependiendo el botón que hayamos pulsado
    function mostrar_datos()
    {
         $this->load->database();
        //recuperamos la id que hemos envíado por ajax
        $id = $this->input->post('id');
        //solicitamos al modelo los datos de esa id
        $edicion = $this->asesoria_model->obtener($id);
        //recorremos el array con los datos de ese id
        //y creamos el formulario con el helper form
      
            $idtrab = array(
                'name' => 'tg',
                'id' => 'id_tg',
                'value' => $edicion->id_trabajog
            );
            $numa = array(
                'name' => 'numa',
                'id' => 'id_numa',
                'value' => $edicion->num_asesoria
            );
            $date = array(
                'name' => 'fech',
                'id' => 'id_fech',
                'value' => $edicion->fecha_asesoria
            );
            $hour = array(
                'name' => 'hor_a',
                'id' => 'id_hor_a',
                'cols' => '50',
                'rows' => '6',
                'value' => $edicion->hora_asesoria
            );
            $submit = array(
                'name' => 'editando',
                'id' => 'editando',
                'value' => 'Editar mensaje'
            );
            $oculto = array(
                'id' => $id
               
               );
             
            //mostramos el formulario con los datos cargados
            ?>
            <?= form_open('datos_upd_ase/actualizar_datos','', $oculto) ?>
            <?= form_label('Id Trabajo de Graduación') ?>
            <?= form_input($idtrab) ?>
            <?= form_label('Numero Asesoria') ?>
            <?= form_input($numa) ?>
            <?= form_label('Fecha Asesoría') ?>
            <?= form_input($date) ?>
            <?= form_label('Hora Asesoria') ?>
            <?= form_textarea($hour) ?>
 
            <?= form_submit($submit) ?>
            <?php    
            }    
           //función encargada de actualizar los datos    
           function actualizar_datos()    
           {        
                $this->load->database();
               $id = $this->input->post('id');
               $idtrab = $this->input->post('tg');
               $numa = $this->input->post('numa');
               $date = $this->input->post('fech');
               $hour = $this->input->post('hor_a');
               
               $actualizar = $this->asesoria_model->actualizar_mensaje($id,$idtrab,$numa,$date,$hour);
               //si la actualización ha sido correcta creamos una sesión flashdata para decirlo
               if($actualizar)
               {
               echo 'correcto';
               // $this->session->set_flashdata('actualizado', 'El mensaje se actualizó correctamente');
               // redirect('datos_upd_ase', 'refresh');
               }
    }
}
/*application/controllers/datos.php
* el controlador datos.php
*/
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
