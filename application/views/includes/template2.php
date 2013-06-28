<?php
// agrego la variable item para que me cargue el dropbox dentro de main_content de usuario
$this->load->view('includes/header'); //aqui creamos el encabezado

$niv=$this->session->userdata['niv'];
if($niv==1){
$this->load->view('includes/header_ci');
}
else{
    $this->load->view('includes/header_ci2');
}
$llenado['item']=$item;
$llenado['nivel']=$nivel;
$this->load->view($main_content,$llenado); //esta variable servira para pasar el contenido a la vista
$this->load->view('includes/footer');//esta variable carga el footer en la vista
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
