
        <title><?= $title ?></title>
        
        <script type="text/javascript">
            //función encargada de procesar la solicitud al pulsar el botón pasar_edicion
            function saltar(id){
                $("#editar").load("<?php echo base_url();?>/index.php/datos_con_ase/mostrar_datos", { id: id});
                $("#editar").fadeIn('2000');
                
            }
        </script>
    </head>
 
    <body>
        <div id="container" class="ltr">
        <table>
            <tr>
                <th>Id Trabajo de Graduación</th>
                <th>Numero Asesoria</th>
                <th>Fecha Asesoria</th>
                <th>Hora Asesoria</th>
                <th></th>
            </tr>
            <?php
            foreach ($mensajes as $fila):
                $id = $fila->id_asesoria;
                //creamos el botón que debe colocar los datos dentro de los campos
                //del formulario que se creará con la función saltar($id) que le pasamos
                //la id del mensaje
                $boton = array(
                    'name' => 'pasar_edicion',
                    'id' => 'pasar_edicion',
                    'onclick' => "saltar($id)"
                );
                
                ?>
                <tr>
                    <td><?= $fila->id_trabajog ?></td>
                    <td><?= $fila->num_asesoria ?></td>
                    <td><?= $fila->fecha_asesoria ?></td>
                    <td><?= $fila->hora_asesoria ?></td>
                    
                </tr>
                <?php
            endforeach;
            ?>
            <?php
            //si se hace la actualización mostramos el mensaje que contiene
            //la sesión flashdata actualizado que hemos creado en el controlado
           // $actualizar = $this->session->flashdata('actualizado');
            
           // if ($actualizar) {
                ?>
                <tr>
                   <!-- <td colspan="5" id="actualizadoCorrectamente"> echo 'actualizado'//$actualizar ?></td>-->
                </tr>
                <?php
            //}
            ?>
        </table>
        
            <div id="editar" id="container" class="ltr" >            
        </div>
   