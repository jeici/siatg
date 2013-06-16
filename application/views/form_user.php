<title>
Seleccione Tipo Usuario
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

<!-- Scrip para redirigir con botones -->

<script language="javascript" type="text/javascript">
	function enviar(pagina){
			document.form_enviar.action=pagina;
			document.form_enviar.submit();
	}

</script>
</head>

<body id="public">

<div id="container" class="ltr">

<?php
$opciones = array(
		1  => 'DBA',
		2  => 'ADMINISTRADOR',

);

$atributos = array('id'=> 'form_enviar', 'class' => 'enviar_form','href' => 'usuario/modificar_user');


?>

<div class="container_12">
  <h2>LISTA DE USUARIOS</h2>
        <div class="grid_12">
            <div class="grid_12" id="head">
                <div class="grid_2" id="head_nombre">Nombre</div>
                <div class="grid_2" id="head_apellido">Apellido</div>
                <div class="grid_2" id="head_nick">Nick</div>
                <div class="grid_2" id="head_editar">Editar</div>
            </div>
            <?php
            foreach($users as $fila):
            ?>
            <div class="grid_12" id="body">
                <div class="grid_2" id="nombre<?=$fila->id_usuario?>"><?=$fila->nombre_u?></div>
                <div class="grid_2" id="email<?=$fila->id_usuario?>"><?=$fila->apellido_u?></div>
                <div class="grid_2" id="registro<?=$fila->id_usuario?>"><?=$fila->nick?></div>
                <div class="grid_2" id="editar"><?php echo form_open("usuario/modificar_user",$atributos);?><input type="submit" value="Modificar" id="<?=$fila->id_usuario?>" class="editar"><?php echo form_hidden('id', $fila->id_usuario);?> <?php form_close();?></div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
    

</div><!--container-->