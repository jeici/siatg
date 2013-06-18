<title>
Datos personales
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
</head>

<body id="public">

<div id="container" class="ltr">
<?php
$atributos = array('id'=> 'form_usuario', 'class' => 'usuario_form');
echo form_open('usuario/busqueda',$atributos); //en este caso datosenviados contiene la url que hace el action
$data_nombres = array(
		'name'        => 'nombres',
		'id'          => 'id_nombre',
		'maxlength'   => '50',
		'size'        => '50',

		'placeholder' => 'Digite los nombres a buscar',
);


$opciones = array(
		0 => 'TODOS',
		1  => 'DBA',
		2  => 'ADMINISTRADOR',

);



$data_carrera=$item;//recupero el array aqui.
$data_carrera[0]='TODOS';
array_multisort($data_carrera);
$data_nivel=$nivel;//llenar el array de niveles.
$data_nivel[0]='TODOS';
array_multisort($data_nivel);
//print_r($data_carrera);
//print_r($data_nivel);
?>
    

<form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="https://jrlopez.wufoo.com.mx/forms/z7x4m1/#public">


<h2>BUSQUEDA DE USUARIO</h2>
<div>Ingrese los filtros para buscar usuario</div>


<ul>

<li id="foli2" class="notranslate      ">
<label class="desc" id="title2" for="Field2">
<?php echo form_label('Nombre');?>
</label>
<span>
<?php echo form_input($data_nombres);?>
</li>

<li id="foli213" class="notranslate       ">
<label class="desc" id="title213" for="Field213">
Tipo
</label>
<div>
<?php echo form_dropdown('tipo',$opciones,0);?>
</div>
</li> 

<li id="foli603" class="notranslate       ">
<label class="desc" id="title603" for="Field603">
NIVEL DE ACESSO
</label>
<div>

<?php echo form_dropdown('nivel', $data_nivel,0);
	
?>
</div>
</li> 

<li id="foli600" class="notranslate       ">
<label class="desc" id="title600" for="Field600">
Carrera
</label>
<div>

<?php echo form_dropdown('carrera', $data_carrera,0);
	
?>
</div>
</li> 
</li> 
<li class="buttons ">
<div>

<?php echo form_submit('buscar','Buscar Usuario');?>
                    
 </div>
</li>


</form> 

</div><!--container-->