<title>
LOGEO
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
        echo form_open('logeo/recibir_datos', $attributes);
        
       
        $data1 = array(
              'name'        => 'username',
              'id'          => 'username',
                'maxlength'   => '20',
		'size'        => '20',
            'placeholder' => 'Digite el usuario',
              'value'       => set_value('username')
            
              
            );
        $data2 = array(
              'name'        => 'password',
              'id'          => 'password',
                'maxlength'   => '20',
		'size'        => '20',
            'placeholder' => 'Digite la contraseña',
              'value'       => set_value('password')
              
            );
                
        
        ?>

<form id="form2" name="form2" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="https://dark0685.wufoo.com.mx/forms/m7x4z5/#public">

<header id="header" class="info">
<h2>INICIO DE SESION</h2>
<div>Ingreso de Sistema SIATG</div>
</header>

<ul>


<li id="foli4" class="notranslate      ">
<label class="desc" id="title4" for="Field4">
Usuario
<span id="req_2" class="req">*</span>
</label>
<div>

<?php   
            
            echo form_input($data1);
            echo form_error('username');?>
</div>
</li><li id="foli5" class="notranslate      ">
<label class="desc" id="title5" for="Field5">
Password
<span id="req_2" class="req">*</span>
</label>
<div>

<?php   
            
            echo form_input($data2);
            echo form_error('password');?>
</div>
</li>

 <li class="buttons ">
<div>
<?php echo form_submit('ingresar','Ingresar');?>
   
    <?php echo form_close();?>
 </div>
</li>

</ul>
</form> 

</div><!--container-->