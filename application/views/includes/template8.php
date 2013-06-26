<?php
$this->load->view('includes/header'); //aqui creamos el encabezado
$this->load->view('includes/header_ci');
//$this->load->view($main_content); //esta variable servira para pasar el contenido a la vista
//$llenado['item']=$item;
//$llenado2['item2']=$item2;

$this->load->view($main_content);

$this->load->view('includes/footer');//esta variable carga el footer en la vista
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
