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
				$("#datepicker").datepicker();
                                $('#datepicker').datepicker('option', {dateFormat: 'yy/mm/dd'});
				});
			  
		</script>	
	 	


<body id="public">
<div class="container_12 ">
	<div id="container" class="ltr">
<?php 
        $atributos = array('id'=> 'form_ins_defensa', 'class' => 'defensa_form');
        echo form_open('defensa/recibir_datos',$atributos); //en este caso datosenviados contiene la url que hace el action 
        
         $data=$item1;
         
         $data2 = array(
         		'name'        => 'datepicker',
         		'id'          => 'datepicker',
         		//'value'       => set_value('fecha'),
         		//'maxlength'   => '15',
         		'size'        => '30',
         		'class'		=> 'field text nospin small',
         		'placeholder' => 'Digite la fecha',
         );
        $data3 = array(
                '1'  => 'Primer Defensa',
		'2'  => 'Segunda Defensa',
                '3'  => 'Tercer Defensa'  
              
            );
        
        $data4 = array(
              'name'        => 'inidefensa',
              'id'          => 'inidefensa',
              'value'       => set_value('inidefensa'),
              'maxlength'   => '50',
              'size'        => '30',
              
              'placeholder' => 'Hora inicio de defensa',
            );
       $data5 = array(
              'name'        => 'findefensa',
              'id'          => 'findefensa',
              'value'       => set_value('findefensa'),
              'maxlength'   => '50',
              'size'        => '30',
              
              'placeholder' => 'Hora fin de defensa',
            );
        
        ?>
    

	<form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
	action="https://jrlopez.wufoo.com.mx/forms/z7x4m1/#public">


	<h2>Datos Defensa</h2>
	<div>Ingreso de Defensa </div>
	
	
	<ul>
	
	
	
	<li id="foli11" class="notranslate      ">
		<div id="id_tg" >
			<label class="desc" id="title11" for="Field11">
			Tema Trabajo de Graduación
			</label>
			 <div>   
			<?php echo form_dropdown('tg',$data,1);
			 echo form_error('tg');?>
		
		    
		</div>
	    
	    
		<label class="desc" id="title11" for="Field11">
		Fecha de defensa
		</label>
		<div>
			<?php echo form_input($data2);?>
			<?php //echo form_error('nombre');?>
		</div>
	</li>

	<li id="foli103" class="date notranslate      ">
		<label class="desc" id="title11" for="Field11">
			Numero de defensa
		</label>
	
		<div>
			<?php echo form_dropdown('numdefensa',$data3); ?>
		</div>
	</li> 
	<li id="foli11" class="notranslate      ">
		<label class="desc" id="title11" for="Field11">
		Hora de inicio de defensa
		</label>
		
		<div>
			<?php echo form_input($data4);?>
			<?php //echo form_error('correo');?>
		</div>
	</li>
        
        <li id="foli11" class="notranslate      ">
		<label class="desc" id="title11" for="Field11">
		Hora de fin de defensa
		</label>
		
		<div>
			<?php echo form_input($data5);?>
			<?php //echo form_error('correo');?>
		</div>
	</li>
<li id="foli12" class="notranslate      ">
<fieldset>
<![if !IE | (gte IE 8)]>

</fieldset>
 
<div>
<?php echo form_submit('ingresar','Ingresar Defensa');?>
                    
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