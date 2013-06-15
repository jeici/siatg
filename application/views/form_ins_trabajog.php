<title>
Trabajo de Graduacion
</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index, follow">

<!-- CSS -->
<link href="css/structure.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">

<!-- JavaScript -->
<script src="scripts/wufoo.js"></script>

<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="public">
<div id="container" class="ltr">

<?php 
        
        $attributes = array('class' => 'id_nivel', 'class' => 'form_nivel');
        echo form_open('trabajograduacion/recibir_datos', $attributes);
        
        $data=$item1;
        $data2=$item2;
        $data3 = array(
              'name'        => 'tema',
              'id'          => 'tema',
                'maxlength'   => '20',
		'size'        => '20',
            'placeholder' => 'Digite el tema',
              'value'       => set_value('tema')
            
              
            );
        $data4 = array(
              'name'        => 'grupo',
              'id'          => 'grupo',
                'maxlength'   => '20',
		'size'        => '20',
            'placeholder' => 'Digite el numero de grupo',
              'value'       => set_value('grupo')
              
            );
         $data5 = array(
              'name'        => 'observacion_tg',
              'id'          => 'observacion_tg',
                'maxlength'   => '29',
		'size'        => '20',
             'placeholder' => 'Digite las observaciones',
              'value'       => set_value('observacion_tg')
              
            );
        
        $data6 = array(
              'name'        => 'nota_final',
              'id'          => 'nota_final',
                'maxlength'   => '20',
		'size'        => '20',
                'disabled'       => 'disabled',
              'value'       => '0.0'
              
            );
        $data7 = array(
                'TRUE'  => 'Activo',
		'FALSE'  => 'Inactivo',
                
              
            );
        $data8 = array(
              'En proceso'  => 'En proceso',
		'Finalizado'  => 'Finalizado',
              
            );
        
        
        ?>

<form id="form2" name="form2" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="https://dark0685.wufoo.com.mx/forms/m7x4z5/#public">

<header id="header" class="info">
<h2>Trabajo de Graduacion</h2>
<div>Ingreso de trabajos de graduacion</div>
</header>

<ul>

<li id="foli2" class="notranslate       ">
<label class="desc" id="title2" for="Field2">
Carnet Asesor
<span id="req_2" class="req">*</span>
</label>
<div>

    <?php   
            echo form_dropdown('asesor',$data,1);
            echo form_error('asesor');?>
</div>
</li>

<li id="foli3" class="notranslate       ">
<label class="desc" id="title3" for="Field3">
Carnet Observador
<span id="req_2" class="req">*</span>
</label>
<div>

    <?php    
            
            echo form_dropdown('observador',$data2,1);
            echo form_error('observador');?> 
</div>
</li>
<li id="foli4" class="notranslate      ">
<label class="desc" id="title4" for="Field4">
Tema
<span id="req_2" class="req">*</span>
</label>
<div>

<?php   
            
            echo form_input($data3);
            echo form_error('tema');?>
</div>
</li><li id="foli5" class="notranslate      ">
<label class="desc" id="title5" for="Field5">
Grupo
<span id="req_2" class="req">*</span>
</label>
<div>

<?php   
            
            echo form_input($data4);
            echo form_error('grupo');?>
</div>
</li><li id="foli6" 
class="notranslate      "><label class="desc" id="title6" for="Field6">
Observacion
</label>

<div>

<?php   
            
            echo form_textarea($data5);
            echo form_error('observacion_tg');?>
</div>
</li>
<li id="foli8" class="notranslate      ">
<label class="desc " id="title8" for="Field8">
Nota final
</label>
<div>

<?php   
            
            echo form_input($data6);
            echo form_error('nota_final');?>
</div>
</li><li id="foli9" class="notranslate      ">
<fieldset>
<![if !IE | (gte IE 8)]>
<legend id="title9" class="desc">
Estado
</legend>
<![endif]>
<!--[if lt IE 8]>
<label id="title9" class="desc">
Condicion
</label>
<![endif]-->
<div>

<?php   
            
            echo form_dropdown('estado',$data7);
            echo form_error('estado');?>
</div>
</fieldset>
</li><li id="foli10" class="notranslate      ">
<label class="desc" id="title10" for="Field10">
Avance
</label>
<div>

<?php   
            
            echo form_dropdown('avance',$data8);
            echo form_error('avance');?>
</div>
</li>

 <li class="buttons ">
<div>
<?php echo form_submit('ingresar','Ingresar Trabajo de Graduacion');?>
   
    <?php echo form_close();?>
 </div>
</li>

</ul>
</form> 

</div><!--container-->