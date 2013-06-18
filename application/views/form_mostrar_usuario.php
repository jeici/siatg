<title>
LISTADO USUARIO
</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index, follow">

<!-- CSS -->
<link href="../css/structure.css" rel="stylesheet">
<link href="../css/form.css" rel="stylesheet">

<!-- JavaScript -->
<script src="../scripts/wufoo.js"></script>
<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<!-- Scrip para redirigir con botones -->

</head>

<body id="public">

<div id="container" class="ltr">

<?php
$opciones = array(
		1  => 'DBA',
		2  => 'ADMINISTRADOR',

);

$atributos = array('id'=> 'form_enviar', 'class' => 'enviar_form','href' => 'usuario/modificar_user');


?>

<div class="container_12">
  <h2>RESULTADOS DE LA BUSQUEDA</h2>
 	<table>
 		<tr>
 			<th>NOMBRE</th>
 			<th>DIRECCION</th>
 			<th>CORREO</th>
 			<th>NICK</th>
 			<th>TIPO</th>
 			<th>CARRERA</th>
 			<th>TELEFONO</th>
 		</tr>
 <?php

 	foreach($resultado as $fila){
 ?>
 <tr><td><?= $fila['nombre'] ?></td><td><?= $fila['direccion_u']?></td><td><?= $fila['correo_u']?></td><td><?= $fila['nick']?></td><td><?= $fila['tipo']?></td><td><?= $fila['nombre_carrera']?></td><td><?= $fila['telefono']?></td></tr>
 <?php 
 }
 if(isset($resultado)){
	echo "NO HAY RESULTADOS QUE MOSTRAR";}
 ?>
 	</table> 

 
        
    </div>
    

</div><!--container-->
