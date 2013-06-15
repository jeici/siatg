<title>
Carreras de la FIA
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
        echo form_open('carrera/recibir_datos', $attributes);
        
       
        $data1 = array(
              'name'        => 'nombrec',
              'id'          => 'nombrec',
                'maxlength'   => '20',
		'size'        => '20',
            'placeholder' => 'Digite el nombre de la carrera',
              'value'       => set_value('nombrec')
            
              
            );
        $data2 = array(
              'name'        => 'codigo',
              'id'          => 'codigo',
                'maxlength'   => '20',
		'size'        => '20',
            'placeholder' => 'Digite el codigo de carrera',
              'value'       => set_value('codigo')
              
            );
                
        
        ?>

<form id="form2" name="form2" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="https://dark0685.wufoo.com.mx/forms/m7x4z5/#public">

<header id="header" class="info">
<h2>Carreras de la FIA</h2>
<div>Ingreso de Carreras de la Facultad de Ingenieria</div>
</header>

<ul>


<li id="foli4" class="notranslate      ">
<label class="desc" id="title4" for="Field4">
Nombre de la Carrera
<span id="req_2" class="req">*</span>
</label>
<div>

<?php   
            
            echo form_input($data1);
            echo form_error('nombrec');?>
</div>
</li><li id="foli5" class="notranslate      ">
<label class="desc" id="title5" for="Field5">
Codigo de la Carrera
<span id="req_2" class="req">*</span>
</label>
<div>

<?php   
            
            echo form_input($data2);
            echo form_error('codigo');?>
</div>
</li>

 <li class="buttons ">
<div>
<?php echo form_submit('ingresar','Ingresar Carrera');?>
   
    <?php echo form_close();?>
 </div>
</li>

</ul>
</form> 

</div><!--container-->