<div class="container_12 ">
    <div align="center" >
	    <link rel="stylesheet" href="<?php echo base_url();?>css/jMenu.jquery.css" type="text/css" />
        <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jMenu.jquery.js"></script>
   
        <ul id="jMenu">
            <li>
                <a class="fNiv">Administraci&oacute;n</a>
                <ul>
                    <li class="arrow"></li>
                    <li>
                        <a>Personal Administrativo</a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/persona">Agregar Personal</a></li>
                            <li><a href="<?php echo base_url();?>index.php/persona/seleccionar_tipo">Modificar Personal</a></li>
                            <li><a href="<?php echo base_url();?>index.php/persona/consultar_tipo">Consultar Personal</a></li>
                           
                        </ul>
                    </li>
                   </ul>  
                  </li> 
                  <li>          
                  <a class="fNiv">Usuarios</a>
                <ul>
                    <li class="arrow"></li>
                    <li>
                        <a>Usuarios</a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/usuario">Agregar Usuario</a></li>
                            <li><a href="<?php echo base_url();?>index.php/usuario/seleccionar_tipo">Modificar Usuario</a></li>
                            <li><a href="<?php echo base_url();?>index.php/usuario/buscar_usuario">Buscar Usuario</a></li>
                            <li><a href="<?php echo base_url();?>index.php/usuario/seleccionar_tipo_consultar">Consultar Usuario</a></li>
                           
                            
                        </ul>
                    </li>
                                   </ul>
            </li>

            <li>
                <a class="fNiv">Trabajos de Graduaci&oacute;n</a>
                <ul>
                    <li class="arrow"></li>
                    <li>
                        <a>Trabajos de Graduación</a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/trabajograduacion/usuario">Agregar Trabajos de Graduaci&oacute;n</a></li>
                            <li><a href="<?php echo base_url();?>index.php/trabajograduacion/seleccionar_tg">Modificar Trabajos de Graduaci&oacute;n</a></li>
                            <li><a href="<?php echo base_url();?>index.php/trabajograduacion/consultar_tg">Consultar Trabajos de Graduaci&oacute;n</a></li>
                      <!--  <li><a>Category 3.3</a></li>
                            <li><a>Category 3.3</a></li>
                            <li><a>Category 3.3</a></li>
                            <li><a>Category 3.3</a></li>-->
                        </ul>
                    </li>
                    <li>
                        <a>Calificaciones</a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/nota/usuario">Calificar Trabajo de Graduaci&oacute;n</a></li>
                            <li><a >Modificar Calificaci&oacute;n</a></li>
                            <li><a >Consultar Calificaci&oacute;n</a></li>
                        </ul>
                    </li>
                    
                  
                </ul>
            </li>

            <li>
                <a class="fNiv">Defensas</a>
                <ul>
                    <li class="arrow"></li>
                  <!--  <li><a>Category 4.2</a></li>
                    <li><a>Category 4.2</a></li>-->
                    <li>
                        <a>Defensa </a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/defensa/usuario">Programar Defensa</a></li>
                            <li><a href="<?php echo base_url();?>index.php/defensa/seleccionar_def">Reprogramar Defensa</a></li>
                            <li><a href="<?php echo base_url();?>index.php/defensa/consultar_def">Consultar Defensa</a></li>
                           <!-- <li><a>Category 4.3</a></li>-->
                        </ul>
                    </li>
                    
                    <ul>
                            <li><a>Asignar Local</a></li>
                            <li><a>Cambiar Local</a></li>
                            <li><a>Consultar Local</a></li>
                           <!-- <li><a>Category 4.3</a></li>-->
                        </ul>
                    
                    
                    </li>
                    
                </ul>
            </li>

            <li>
                <a class="fNiv">Carrera</a>
                <ul>
                    <li class="arrow"></li>
                    <li>
                        <a>Carrera</a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/carrera/usuario">Agregar Carrera</a></li>
                            <li><a href="<?php echo base_url();?>index.php/carrera/seleccionar_carr">Modificar Carrera</a></li>
                            <li><a href="<?php echo base_url();?>index.php/carrera/consultar_carr">Consultar Carrera</a></li>
                           
                        </ul>
                    </li>
                    
                </ul>
            </li>

            

            <li>
                <a class="fNiv">Nivel</a>
                <ul>
                    <li class="arrow"></li>
                    <li><a href="<?php echo base_url();?>index.php/nivel/usuario">Agregar Nivel</a></li>
                    <li><a href="<?php echo base_url();?>index.php/nivel/seleccionar_nivel">Modificar Nivel</a></li>
                   <li><a href="<?php echo base_url();?>index.php/nivel/consultar_nivel">Consultar Nivel</a></li>
                   
                </ul>
            </li>
            <li><a class="fNiv"></a></li>
            
            <li>
                <a class="fNiv">Asesoria</a>
                <ul>
                    <li class="arrow"></li>
                    <li><a href="<?php echo base_url();?>index.php/asesoria/">Agregar Asesoria</a></li>
                    <li><a href="<?php echo base_url();?>index.php/datos_upd_ase">Modificar Asesoria</a></li>
                   <li><a href="<?php echo base_url();?>index.php/datos_con_ase">Consultar Asesoria</a></li>
                   
                </ul>
            </li>
            <li><a class="fNiv"></a></li>
            
            <li>
                <a class="fNiv">Cerrar Sesi&oacute;n</a>
                <ul>
                    <li class="arrow"></li>
                    <li><a href="<?php echo base_url();?>index.php/cerrar/usuario">Cerrar Sesi&oacute;n</a></li>
                    
                   
                </ul>
            </li>
            <li><a class="fNiv"></a></li>
            
        </ul>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#jMenu").jMenu();
            });
        </script>
   </div>
    
</div>
	
</header>
     
<body> 