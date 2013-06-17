<!doctype html>
<html>
  <header>
    <meta charset="utf-8">
	<div class="container_16 ">
        <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    	<link rel="stylesheet" href="<?php echo base_url();?>css/bjqs.css">

	    <!-- some pretty fonts for this demo page - not required for the slider -->
	    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 
	
	    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
	    <link rel="stylesheet" href="<?php echo base_url();?>css/demo.css">
		<link rel="stylesheet" href="<?php echo base_url();?>jquery-ui.css" />
	    <!-- load jQuery and the plugin -->
	    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	    <script src="<?php echo base_url();?>js/bjqs-1.3.min.js"></script>
	    
		
                
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/960.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/reset.css" media="screen"/>
		<!-- <link rel="stylesheet" type="text/css" href="http://localhost:8081/siatg/css/960.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="http://localhost:8081/siatg/css/reset.css" media="screen"/>-->
        <!-- <?php  //echo base_url();
        			// pone la ruta de forma dinamica
        			// esta ruta es la que extrae
        			// http://localhost:8081/siatg/?> -->
        

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
        <title><?php echo $title; ?></title>
    
   	 	<div id="container">
		      <!--  Outer wrapper for presentation only, this can be anything you like -->
		      <div id="banner-fade">

			        <!-- start Basic Jquery Slider -->
			        <ul class="bjqs">
			          <li><img src="<?php echo base_url();?>imagenes/minerva.jpg" title="Minerva"></li>
			          <li><img src="<?php echo base_url();?>imagenes/minerva2.jpg" title="Minerva"></li>
			          <li><img src="<?php echo base_url();?>imagenes/ing.jpg" title="Biblioteca Ingenieria"></li>
			           <li><img src="<?php echo base_url();?>imagenes/transition.jpg" ></li>
			        </ul>
			        <!-- end Basic jQuery Slider -->

      		</div>
		      <!-- End outer wrapper -->
		
		      <script >
		        jQuery(document).ready(function($) {
		
		          $('#banner-fade').bjqs({
		            height      : 320,
		            width       : 1280,
		            responsive  : true
		          });
		
		        });
		      </script>
      
      		<script src="<?php echo base_url();?>js/libs/jquery.secret-source.min.js"></script>

		    <script>
		    jQuery(function($) {
		
		        $('.secret-source').secretSource({
		            includeTag: false
		        });
		
		    });
		    </script>
   

    	</div>
    
     </div>