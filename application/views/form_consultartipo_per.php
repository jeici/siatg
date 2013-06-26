<title>
Seleccione Categoría de Persona
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
$atributos = array('id'=> 'form_tipo_per', 'class' => 'tipo_form');
echo form_open('persona/consultar_persona',$atributos); //en este caso datosenviados contiene la url que hace el action


$opciones = array(
		1  => 'DOCENTE',
		2  => 'ESTUDIANTE',

);



?>
    

<form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="https://jrlopez.wufoo.com.mx/forms/z7x4m1/#public">


<h2>CATEGORIA DE PERSONA</h2>
<div>SELECCIONE EL TIPO DE PERSONA A CONSULTAR</div>

<ul>

<li id="foli213" class="notranslate       ">
<label class="desc" id="title213" for="Field213">
Tipo
<span id="req_213" class="req">*</span>
</label>
<div>
<?php echo form_dropdown('tipo',$opciones,1);?>
</div>
</li> 

<li class="buttons ">
<div>

<?php echo form_submit('ingresar','Ver Personas');?>
                    
 </div>
</li>


</form> 

</div><!--container-->