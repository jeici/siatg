
	<title>
	Datos Asesoría
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
	
	<!-- para la fecha -->
		<link rel="stylesheet" href="<?php echo base_url();?>js/datepicker/jquery-ui.css" />
		<!-- <script src="<?php echo base_url();?>js/datepicker/jquery-1.8.3.js"></script> -->
		<script src="<?php echo base_url();?>js/datepicker/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker" ).datepicker();
				$( "#anim" ).change(function() {
				  $( "#datepicker" ).datepicker( "option", "showAnim", $( this ).val() );
				});
			  });
		</script>	
	 	


<body id="public">
<div class="container_12 ">
	<div id="container" class="ltr">
<?php 
        $atributos = array('id'=> 'form_ins_asesoria', 'class' => 'asesoria_form');
        echo form_open('asesoria/guardar_asesoria',$atributos); //en este caso datosenviados contiene la url que hace el action 
        
         $data_fecha = array(
              'name'        => 'fecha',
              'id'          => 'id_fecha',
              'value'       => set_value('fecha'),
              'maxlength'   => '15',
              'size'        => '50',
              
              'placeholder' => 'Digite la fecha',
            );
         $data_fecha2 = array(
         		'name'        => 'datepicker',
         		'id'          => 'datepicker',
         		//'value'       => set_value('fecha'),
         		//'maxlength'   => '15',
         		'size'        => '30',
         		'class'		=> 'field text nospin small',
         		'placeholder' => 'Digite la fecha',
         );
        $data_hora = array(
              'name'        => 'hora',
              'id'          => 'id_hora',
              'value'       => set_value('hora'),
              'maxlength'   => '50',
              'size'        => '50',
              
              'placeholder' => 'Digite  la hora',
            );
        
        $data_nase = array(
              'name'        => 'nase',
              'id'          => 'id_nase',
              'value'       => set_value('nase'),
              'maxlength'   => '50',
              'size'        => '50',
              
              'placeholder' => 'Digite el Título',
            );
       /* $data_tg = array(
              'name'        => 'tg',
              'id'          => 'id_tg',
              'value'       => set_value('tg'),
              'maxlength'   => '50',
              'size'        => '50',
              
              'placeholder' => 'Digite el ID de trabajo de Graduación',
            );*/
        $data_tg=$item;//recupero el array aqui.
      $data_carrera=$item2;//recupero el array aqui.
        ?>
    

	<form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
	action="https://jrlopez.wufoo.com.mx/forms/z7x4m1/#public">


	<h2>Datos Asesoría</h2>
	<div>Ingreso de Asesorías </div>
	
	
	<ul>
	
	
	
	<li id="foli11" class="notranslate      ">
		<div id="id_tg" >
			<label class="desc" id="title11" for="Field11">
			Tema Trabajo de Graduación
			</label>
			    
			<?php echo form_dropdown('tg', $data_tg,1);
			//<?php echo form_error('titulo');?>
		
		    
		</div>
	    
	    
		<label class="desc" id="title11" for="Field11">
		Fecha
		</label>
		<div>
			<?php echo form_input($data_fecha);?>
			<?php //echo form_error('nombre');?>
		</div>
	</li>

	<li id="foli103" class="date notranslate      ">
		<label class="desc" id="title11" for="Field11">
			Fecha 2
		</label>
	
		<div>
			<?php echo form_input($data_fecha2);?>
			<?php //echo form_error('nombre');?>
		</div>
	</li> 
	<li id="foli11" class="notranslate      ">
		<label class="desc" id="title11" for="Field11">
		Hora
		</label>
		
		<div>
			<?php echo form_input($data_hora);?>
			<?php //echo form_error('correo');?>
		</div>
	</li>
<li id="foli12" class="notranslate      ">
<fieldset>
<![if !IE | (gte IE 8)]>

</fieldset>
 
<div>
<?php echo form_submit('ingresar','Ingresar Persona');?>
                    
 </div>
</li>


</form> 

</div><!--container-->
<script>
//funcion para tipo de usuario
$('#Tipo').change(function(){
	//muestra campos para bibliotecarios
	if($(this).val()==1 ){
        $('#titulo').show();
        $('#id_tg').hide();
	}
    if($(this).val()!=1 && $(this).val()!=2){
        $('#titulo').hide();
	}
	//muestra campos para miembros
	if($(this).val()==2){
        $('#id_tg').show();
        $('#titulo').hide();
       
	}
    

   });

</script>


</div>
