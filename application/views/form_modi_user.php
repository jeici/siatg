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
echo form_open('usuario/actualizar_usuario',$atributos); //en este caso datosenviados contiene la url que hace el action
$data_id= array(
	'name'=>'id',
	'value' => $id,
	'size' => '6',
	'disabled'		
);
$data_nombres = array(
		'name'        => 'nombres',
		'id'          => 'id_nombre',
		'value'       => $user['nombre_u'],
		'maxlength'   => '20',
		'size'        => '20',

		//'placeholder' => 'Digite los nombres',
);
$data_apellidos = array(
		'name'        => 'apellidos',
		'id'          => 'id_apellidos',
		'value'       => $user['apellido_u'],
		'maxlength'   => '20',
		'size'        => '20',

		//'placeholder' => 'Digite los apellidos',
);
$data_dir = array(
		'name'        => 'direccion',
		'id'          => 'id_apellidos',
		'value'       => $user['direccion_u'],
		'width'       => '50',
		'rows '       => '10',
		'cols'        => '50',
		 
		'maxlength'   => '30',
		//'placeholder' => 'Digite la dirección',
);
$data_correo = array(
		'name'        => 'correo',
		'id'          => 'id_correo',
		'value'       => $user['correo_u'],
		'maxlength'   => '25',
		'size'        => '25',

		//'placeholder' => 'Digite el correo',
);

$data_tel = array(
		'name'        => 'tel',
		'id'          => 'id_tel',
		'value'       => $phone['telefono'],
		'maxlength'   => '8',
		'size'        => '8',

		//'placeholder' => 'Telefono',
);

$data_nick= array(
	'name' 		=> 'nick',
	'id'   		=> 'id_nick',
	'value' 	=> $user['nick'],
	'maxlength' => '15',
	'size' 		=> '15',
	'placeholder' => 'Digite el nick',	
	'disabled'	

);

$data_pass=array(
	'name' 		=> 'pass',
	'id'   		=> 'id_pass',
	'value' 	=> $login['clave'],
	'maxlength' => '15',
	'size' 		=> '15',
	
//'placeholder' => 'Digite contrase&ntilde;a'
);

$data_options = array(
		'TRUE'  => 'Activo',
		'FALSE'  => 'Inactivo',
);

$data_carrera=$item;//recupero el array aqui.

$data_nivel=$nivel;//llenar el array de niveles.



?>
    

<form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="https://jrlopez.wufoo.com.mx/forms/z7x4m1/#public">


<h2>Datos personales</h2>
<div>Ingreso de Datos Personales</div>


<ul>

<li id="foli11" class="notranslate      ">
<label class="desc" id="title11" for="Field11">
ID
</label>
<div>
<?php echo form_input($data_id);?>
</div>
</li>

<li id="foli2" class="notranslate      ">
<label class="desc" id="title2" for="Field2">
<?php echo form_label('Nombres y Apellidos:');?>
<span id="req_2" class="req">*</span>
</label>
<span><label for="Field2">Nombres</label>
<?php echo form_input($data_nombres);?>
<?php echo form_error('nombres');?>

</span>
<span>
<label for="Field2">Apellidos</label>
<?php echo form_input($data_apellidos);?>
<?php echo form_error('apellidos');?>
</span>
</li>
<li id="foli10" 
class="notranslate      "><label class="desc" id="title10" for="Field10">
Dirección
<span id="req_10" class="req">*</span>
</label>

<div>
<?php echo form_textarea($data_dir);?>
<?php echo form_error('direccion');?>

</div>
</li>
<li id="foli11" class="notranslate      ">
<label class="desc" id="title11" for="Field11">
Correo electrónico
</label>
<div>
<?php echo form_input($data_correo);?>
<?php echo form_error('correo');?>
</div>
</li>
<li id="foli800" class="notranslate      ">
<label class="desc" id="title800" for="Field800">
Telefono
</label>
<div>
<?php echo form_input($data_tel);?>
<?php echo form_error('Telefono');?>
</div>
</li>
<li id="foli12" class="notranslate      ">
<fieldset>
<![if !IE | (gte IE 8)]>
<legend id="title12" class="desc">
Estado
</legend>
<![endif]>
<!--[if lt IE 8]>
<label id="title12" class="desc">
Estado
</label>
<![endif]-->
<div>
<span>
<?php echo form_dropdown('estado',$data_options);?>

</span>
</div>
</fieldset>
</li>



<li id="foli603" class="notranslate       ">
<label class="desc" id="title603" for="Field603">
NIVEL DE ACESSO
<span id="req_603" class="req">*</span>
</label>
<div>

<?php echo form_dropdown('nivel', $data_nivel,$login['id_nivel']);
	
?>
</div>
</li> 

<li id="foli600" class="notranslate       ">
<label class="desc" id="title600" for="Field600">
Carrera
<span id="req_600" class="req">*</span>
</label>
<div>

<?php echo form_dropdown('carrera', $data_carrera, $login['id_carrera']);
	
?>
</div>
</li> 
</li> 
<li id="foli400" class="notranslate      ">
<label class="desc" id="title400" for="Field400">
Nick
</label>
<div>
<?php  echo form_input($data_nick);?>
</div>

<li id="foli401" class="notranslate      ">
<label class="desc" id="title401" for="Field401">
Contrase&ntilde;a
</label>
<div>
<?php  echo form_input($data_pass);?>
</div>
<li class="buttons ">
<div>

<?php echo form_submit('ingresar','Ingresar Usuario');?>
                    
 </div>
</li>


</form> 

</div><!--container-->