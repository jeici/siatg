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
        echo form_open('nota/recibir_datos', $attributes);
        
        $data=$item1;
        $data2=$item2;
        $data3 = array(
              'name'        => 'nota',
              'id'          => 'nota',
                'maxlength'   => '20',
		'size'        => '20',
            'placeholder' => 'Digite la nota',
              'value'       => set_value('nota')
            
              
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
Defensa Numero:
<span id="req_2" class="req">*</span>
</label>
<div>

    <?php   
            echo form_dropdown('id_defensa',$data,1);
            echo form_error('id_defensa');?>
</div>
</li>

<li id="foli3" class="notranslate       ">
<label class="desc" id="title3" for="Field3">
Trabajo de graduacion
<span id="req_2" class="req">*</span>
</label>
<div>

    <?php    
            
            echo form_dropdown('id_trabajog',$data2,1);
            echo form_error('id_trabajog');?> 
</div>
</li>
<li id="foli4" class="notranslate      ">
<label class="desc" id="title4" for="Field4">
Nota
<span id="req_2" class="req">*</span>
</label>
<div>

<?php   
            
            echo form_input($data3);
            echo form_error('nota');?>
</div>

 <li class="buttons ">
<div>
<?php echo form_submit('ingresar','Ingresar Notas');?>
   
    <?php echo form_close();?>
 </div>
</li>

</ul>
</form> 

</div><!--container-->