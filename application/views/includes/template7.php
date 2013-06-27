<?php
// agrego la variable item para que me cargue el dropbox dentro de main_content de usuario
$this->load->view('includes/header'); //aqui creamos el encabezado
$nivel=$this->session->userdata['nivel'];
if($nivel==1){
$this->load->view('includes/header_ci');
}
else{
    $this->load->view('includes/header_ci2');
}
$llenado['id']=$id;
$llenado['tipo']=$tipo;
$llenado['user']=$user;
$llenado['telefono']=$telefono;
$llenado['tg']=$tg;
//$llenado['trabajo']=$trabajo;
$llenado['item']=$item;
$this->load->view($main_content,$llenado); //esta variable servira para pasar el contenido a la vista
$this->load->view('includes/footer');//esta variable carga el footer en la vista
/*
 * To change this template, choose Tools | Templates
* and open the template in the editor.
*/
?>
