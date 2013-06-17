<title>
Modificar Trabajo de graduacion
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
        echo form_open('trabajograduacion/modificar_tg2', $attributes);
        
                              
        
        $data1 = array(
              'name'        => 'id_trabajog',
              'id'          => 'id_trabajog',
              'placeholder' => 'Digite el id del trabajo',
                
              'value'       => $nivel[0]->id_trabajog,
                'readonly'  =>  'readonly'
              
            );
        $data2 = array(
              'name'        => 'carnet',
              'id'          => 'carnet',
              'placeholder' => 'Digite el carnet',
              'value'       => $nivel[0]->carnet,
              'readonly'  =>  'readonly'
            );
        $data3 = array(
              'name'        => 'obs_carnet',
              'id'          => 'obs_carnet',
              'placeholder' => 'Digite el carnet',
                
              'value'       => $nivel[0]->obs_carnet,
                'readonly'  =>  'readonly'
              
            );
        $data4 = array(
              'name'        => 'tema',
              'id'          => 'tema',
              'placeholder' => 'Digite el tema',
              'value'       => $nivel[0]->tema
              
            );
        $data5 = array(
              'name'        => 'grupo',
              'id'          => 'grupo',
              'placeholder' => 'Digite el grupo',
                
              'value'       => $nivel[0]->grupo,
               
              
            );
        $data6 = array(
              'name'        => 'condicion',
              'id'          => 'condicion',
              'placeholder' => 'Digite el condicion',
              'value'       => $nivel[0]->condicion
              
            );
        $data7 = array(
              'name'        => 'avance',
              'id'          => 'avance',
              'placeholder' => 'Digite el avance',
                
              'value'       => $nivel[0]->avance,
                
              
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
<h2>Modificacion Trabajo de graduacion</h2>
<div>Modificacion T.G.</div>
</header>

<ul>


<label class="desc" id="title4" for="Field4">
Id de T.G.
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data1);
            ?>
</div>
    
    <label class="desc" id="title4" for="Field4">
Carnet Asesor
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data2);
            ?>
</div>
    
<label class="desc" id="title4" for="Field4">
Carnet Observador
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data3);
            ?>
</div>
    
    <label class="desc" id="title4" for="Field4">
Tema
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data4);
            ?>
</div>
    
<label class="desc" id="title4" for="Field4">
Grupo
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data5);
            ?>
</div>
    
    <label class="desc" id="title4" for="Field4">
Condicion
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data6);
            ?>
</div>
    
<label class="desc" id="title4" for="Field4">
Avance
<span id="req_2" class="req"></span>
</label>
<div>

<?php   
            
           
            echo form_input($data7);
            ?>
</div>
    
 <li class="buttons ">
<div>
<?php echo form_submit('Modificar','Modificar T.G.');?>
   
    <?php echo form_close();?>
 </div>
</li>

</ul>
</form> 

</div><!--container-->
