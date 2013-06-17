<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--necesario para utilizar ajax-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <title><?= $title ?></title>
        <style type="text/css">
            /*los estilos*/
            th{
                background-color: #222;
                color: #fff;
            }
            td{
                padding: 5px 40px 5px 40px;
                background-color: #D0D0D0;
            }
            label{
                display: block;
            }
            #editar{
                margin: 30px 0px 0px 300px;
                background-color: #D0D0D0;
                border: 3px solid #999;
                width: 500px;
                padding: 20px;
                display: none;
            }
            input[type=text],input[type=email]{
                padding: 5px;
                width: 250px;
            }
            input[type=submit]{
                padding: 4px 15px 4px 15px;
                background-color: #123;
                border-radius: 4px;
                color: #ddd;
            }
            #actualizadoCorrectamente{
                padding: 5px;
                background-color: #005702;
                color: #fff;
                font-weight: bold;
                text-align: center;
            }
        </style>
        <script type="text/javascript">
            //función encargada de procesar la solicitud al pulsar el botón pasar_edicion
            function saltar(id){
                $("#editar").load("<?php echo base_url();?>/index.php/datos_upd_ase/mostrar_datos", { id: id});
                $("#editar").fadeIn('2000');
                
            }
        </script>
    </head>
 
    <body>
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
                print_r($id);
                ?>
                <tr>
                    <td><?= $fila->id_trabajog ?></td>
                    <td><?= $fila->num_asesoria ?></td>
                    <td><?= $fila->fecha_asesoria ?></td>
                    <td><?= $fila->hora_asesoria ?></td>
                    <td><?= form_button($boton, 'Editar') ?></td>
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
        <div id="editar" >            
        </div>
    </body>
</html>