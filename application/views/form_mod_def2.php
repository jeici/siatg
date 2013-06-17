<title>
Modificar Defensa
</title>

<!-- Meta  Tags -->
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
        echo form_open('defensa/modificar_def2', $attributes);
        
                              
        
        $data1 = array(
              'name'        => 'id_defensa',
              'id'          => 'id_defensa',
              'placeholder' => 'Digite el id_defensa',
                
              'value'       => $nivel[0]->id_defensa,
                'readonly'  =>  'readonly'
              
            );
        $data2 = array(
              'name'        => 'id_trabajog',
              'id'          => 'id_trabajog',
              'placeholder' => 'Digite el id de trabajo',
              'value'       => $nivel[0]->id_trabajog,
              'readonly'  =>  'readonly'
            );
        $data3 = array(
              'name'        => 'fecha_defensa',
              'id'          => 'fecha_defensa',
              'placeholder' => 'Digite fecha defensa',
                
              'value'       => $nivel[0]->fecha_defensa,
                
              
            );
        $data4 = array(
              'name'        => 'num_defensa',
              'id'          => 'num_defensa',
              'placeholder' => 'Digite numero de defensa',
              'value'       => $nivel[0]->num_defensa
              
            );
        $data5 = array(
              'name'        => 'ini_defensa',
              'id'          => 'ini_defensa',
              'placeholder' => 'Digite inicio de defensa',
                
              'value'       => $nivel[0]->ini_defensa,
               
              
            );
        $data6 = array(
              'name'        => 'fin_defensa',
              'id'          => 'fin_defensa',
              'placeholder' => 'Digite fin de defensa',
              'value'       => $nivel[0]->fin_defensa
              
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
<h2>Modificacion Defensa</h2>
<div>Modificacion Defensa.</div>
</header>

<ul>


<label class="desc" id="title4" for="Field4">
Id de Defensa
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data1);
            ?>
</div>
    
    <label class="desc" id="title4" for="Field4">
Id de Trabajo de Graduacion
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data2);
            ?>
</div>
    
<label class="desc" id="title4" for="Field4">
Fecha de defensa
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data3);
            ?>
</div>
    
    <label class="desc" id="title4" for="Field4">
Numero de defensa
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data4);
            ?>
</div>
    
<label class="desc" id="title4" for="Field4">
Hora inicio de defensa
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data5);
            ?>
</div>
    
    <label class="desc" id="title4" for="Field4">
Hora fin de defensa
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data6);
            ?>
</div>
    
    
 <li class="buttons ">
<div>
<?php echo form_submit('Modificar','Modificar Defensa');?>
   
    <?php echo form_close();?>
 </div>
</li>

</ul>
</form> 

</div><!-- container-->
