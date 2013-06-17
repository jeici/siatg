<title>

</title>

<!-- Meta  Tags -->
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

<!-- Scrip para redirigir con botones -->

</head>

<body id="public">

<div id="container" class="ltr">
<div class="container_16">
  <h2>CARRERA</h2>
  <h2>LISTA DE CARRERAS</h2>
  
        <div class="grid_14">
            <div class="grid_14" id="head">
                <div class="grid_2" id="head_nombre">Id Carrera.</div>
                <div class="grid_2" id="head_apellido">Nombre Carrera</div>
                <div class="grid_2" id="head_nombre">Codigo</div>
                
                <div class="grid_1" id="head_editar">Editar</div>
            </div>
             
            <?php
            foreach($nivel as $fila):
            ?>
            <div class="grid_12" id="body">
                <div class="grid_2" id="nombre<?=$fila->id_carrera?>"><?=$fila->id_carrera?></div>
                <div class="grid_2" id="email<?=$fila->id_carrera?>"><?=$fila->nombre_carrera?></div>
                <div class="grid_2" id="nombre<?=$fila->id_carrera?>"><?=$fila->codigo?></div>
                              
                                               
                <div class="grid_1" id="editar"><?php echo form_open("carrera/modificar_carr");?><input type="submit" value="Modificar" id="<?=$fila->id_carrera?>" class="editar"><?php echo form_hidden('id', $fila->id_carrera);?><?php echo form_close();?></div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
    

</div><!-- container-->
