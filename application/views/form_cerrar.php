<?php

$this->session->sess_destroy();
echo 'SESION CERRADA';
echo 'VUELVA A INICIAR SESION';
redirect(base_url());
?>
