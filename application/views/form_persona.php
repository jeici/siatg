

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
        $atributos = array('id'=> 'form_persona', 'class' => 'persona_form');
        echo form_open('persona/datosenviados',$atributos); //en este caso datosenviados contiene la url que hace el action 
        $data_carnet = array(
              'name'        => 'carnet',
              'id'          => 'id_carnet',
              'value'       => '',
              'maxlength'   => '7',
              'size'        => '15',
             
              'placeholder' => 'Digite el carnet',
            );
        $data_nombres = array(
              'name'        => 'nombres',
              'id'          => 'id_nombre',
              'value'       => '',
              'maxlength'   => '50',
              'size'        => '50',
              
              'placeholder' => 'Digite los nombres',
            ); 
        $data_apellidos = array(
              'name'        => 'apellidos',
              'id'          => 'id_apellidos',
              'value'       => '',
              'maxlength'   => '50',
              'size'        => '50',
              
              'placeholder' => 'Digite los apellidos',
            ); 
        $data_dir = array(
              'name'        => 'direccion',
              'id'          => 'id_apellidos',
              'value'       => '',
              'width'       => '50',
              'rows '       => '10',
              'cols'        => '50',
             
              'maxlength'   => '30',
              'placeholder' => 'Digite la dirección',
            ); 
        $data_correo = array(
              'name'        => 'correo',
              'id'          => 'id_correo',
              'value'       => '',
              'maxlength'   => '50',
              'size'        => '50',
              
              'placeholder' => 'Digite el correo',
            );
        $data_checkbox = array(
               'name'        => 'estado',
               'id'          => 'newestado',
               'value'       => 'accept',
               'checked'     => TRUE,
               'style'       => 'margin:10px',
               'tabindex'   => '6'
    );
        $options = array(
                  1  => 'Docente',
                  2  => 'Estudiante',
                  
                );

        
        
        ?>
    

<form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="https://jrlopez.wufoo.com.mx/forms/z7x4m1/#public">


<h2>Datos personales</h2>
<div>Ingreso de Datos Personales</div>


<ul>

<li id="foli1" class="notranslate      ">
<label class="desc" id="title1" for="Field1">
 <?php echo form_label('Carnet:'); ?> 
<span id="req_1" class="req">*</span>
</label>
<div>

 <?php echo form_input($data_carnet);?>
</div>
</li><li id="foli2" class="notranslate      ">
<label class="desc" id="title2" for="Field2">
<?php echo form_label('Nombres y Apellidos:');?>
<span id="req_2" class="req">*</span>
</label>
<span>
<?php echo form_input($data_nombres);?>

<label for="Field2">Nombres</label>
</span>
<span>
<?php echo form_input($data_apellidos);?>
<?php echo form_label('Apellidos');?>
</span>
</li>
<li id="foli10" 
class="notranslate      "><label class="desc" id="title10" for="Field10">
Dirección
<span id="req_10" class="req">*</span>
</label>

<div>
<?php echo form_textarea($data_dir);?>

</div>
</li>
<li id="foli11" class="notranslate      ">
<label class="desc" id="title11" for="Field11">
Correo electrónico
</label>
<div>
<?php echo form_input($data_correo);?>
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
<?php echo form_checkbox($data_checkbox);?>
<label class="choice" for="Field12">Activo</label>
</span>
</div>
</fieldset>
</li><li id="foli213" class="notranslate       ">
<label class="desc" id="title213" for="Field213">
Tipo
<span id="req_213" class="req">*</span>
</label>
<div>
<?php echo form_dropdown('Tipo', $options,1);?>
</div>
</li> <li class="buttons ">
<div>
<?php echo form_submit('ingresar','Ingresar Persona');?>
                    
 </div>
</li>


</form> 

</div><!--container-->

