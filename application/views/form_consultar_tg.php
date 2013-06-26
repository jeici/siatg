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
  <h2>TRABAJO DE GRADUACION</h2>
  <h2>LISTA DE TRABAJOS</h2>
  
        <div class="grid_14">
            <div class="grid_14" id="head">
                <div class="grid_1" id="head_nombre">Id de T.G.</div>
                <div class="grid_2" id="head_apellido">C. Asesor</div>
                <div class="grid_2" id="head_nombre">C. Observ</div>
                <div class="grid_1" id="head_apellido">Tema</div>
                <div class="grid_1" id="head_nombre">Grupo.</div>
                <div class="grid_1" id="head_nombre">Cond.</div>
                <div class="grid_2" id="head_apellido">Avance</div>
               
            </div>
             
            <?php
            foreach($nivel as $fila):
            ?>
            <div class="grid_12" id="body">
                <div class="grid_1" id="nombre<?=$fila->id_trabajog?>"><?=$fila->id_trabajog?></div>
                <div class="grid_2" id="email<?=$fila->id_trabajog?>"><?=$fila->carnet?></div>
                <div class="grid_2" id="nombre<?=$fila->id_trabajog?>"><?=$fila->obs_carnet?></div>
                <div class="grid_1" id="email<?=$fila->id_trabajog?>"><?=$fila->tema?></div>
                <div class="grid_1" id="nombre<?=$fila->id_trabajog?>"><?=$fila->grupo?></div>
                <div class="grid_1" id="email<?=$fila->id_trabajog?>"><?=$fila->condicion?></div>
                <div class="grid_2" id="nombre<?=$fila->id_trabajog?>"><?=$fila->avance?></div>
                
                
                
                <div class="grid_1" id="editar"><?php echo form_open("trabajograduacion/consultar_tg");?><?php echo form_hidden('id', $fila->id_trabajog);?><?php echo form_close();?></div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
    

</div><!--container-->