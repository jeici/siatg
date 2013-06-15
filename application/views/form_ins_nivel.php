
<title>
Insertar Nivel
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
        echo form_open('nivel/recibir_datos', $attributes);
        
        
        $data2 = array(
              'name'        => 'tipo',
              'id'          => 'tipo',
              'placeholder' => 'Digite el tipo',
              'value'       => set_value('tipo')
              
            );
        $submit = array(
              'name'        => 'submit',
              'id'          => 'submit',
              'value'       => 'Enviar',
              
            );
                        
            
            
                   
        ?>
        
<form id="form2" name="form2" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="https://dark0685.wufoo.com.mx/forms/m7x4z5/#public">

<header id="header" class="info">
<h2>Nivel de Acceso</h2>
<div>Ingreso de Nivel</div>
</header>

<ul>


<label class="desc" id="title4" for="Field4">
Tipo de Nivel
<span id="req_2" class="req">*</span>
</label>
<div>

<?php   
            
           
            echo form_input($data2);
            echo form_error('tipo');?>
</div>


 <li class="buttons ">
<div>
<?php echo form_submit('ingresar','Ingresar Nivel');?>
   
    <?php echo form_close();?>
 </div>
</li>

</ul>
</form> 

</div><!--container-->