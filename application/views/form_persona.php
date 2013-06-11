<div class="container_12">
    <div class="grid_12" id="prueba_ci">
        <table border="0" align="center"  class="table table-condensed">
        <?php 
        $atributos = array('id'=> 'form_persona', 'class' => 'persona_form');
        echo form_open('persona/datosenviados',$atributos); //en este caso datosenviados contiene la url que hace el action 
        $data_carnet = array(
              'name'        => 'carnet',
              'id'          => 'id_carnet',
              'value'       => '',
              'maxlength'   => '7',
              'size'        => '7',
              'style'       => 'width:100%',
              'placeholder' => 'Digite el carnet',
            );
        $data_nombres = array(
              'name'        => 'nombres',
              'id'          => 'id_nombre',
              'value'       => '',
              'maxlength'   => '30',
              'size'        => '30',
              'style'       => 'width:100%',
              'placeholder' => 'Digite los nombres',
            ); 
        $data_apellidos = array(
              'name'        => 'apellidos',
              'id'          => 'id_apellidos',
              'value'       => '',
              'maxlength'   => '30',
              'size'        => '30',
              'style'       => 'width:100%',
              'placeholder' => 'Digite los apellidos',
            ); 
        $data_dir = array(
              'name'        => 'direccion',
              'id'          => 'id_apellidos',
              'value'       => '',
              'width'       => '50',
              'rows '       => '5',
              'style'       => 'width:100%',
              'maxlength'   => '30',
              'placeholder' => 'Digite la dirección',
            ); 
        $data_correo = array(
              'name'        => 'correo',
              'id'          => 'id_correo',
              'value'       => '',
              'maxlength'   => '7',
              'size'        => '7',
              'style'       => 'width:100%',
              'placeholder' => 'Digite el correo',
            );
        $data_checkbox = array(
               'name'        => 'estado',
               'id'          => 'newestado',
               'value'       => 'accept',
               'checked'     => TRUE,
               'style'       => 'margin:10px',
    );
        $options = array(
                  1  => 'Docente',
                  2  => 'Estudiante',
                  
                );

        
        
        ?>
        <tr>
		<th colspan="6">DATOS PERSONALES</th>
               
	</tr>
         
        <tr>
          <td> <?php echo form_label('Carnet:'); ?> </td>
          <td> <?php echo form_input($data_carnet);?></td>
          <td width="10"></td>
          <td> <?php echo form_label('Nombres:');?></td>
          <td> <?php echo form_input($data_nombres);?></td>
          <td width="10"></td>
          <td> <?php echo form_label('Apellidos:');?></td>
          <td> <?php echo form_input($data_apellidos);?></td>
        </tr> 
        <tr>
          <td> <?php echo form_label('Direccion:'); ?> </td>
          <td> <?php echo form_textarea($data_dir);?></td>
          <td width="10"></td>
          <td> <?php echo form_label('Correo');?></td>
          <td> <?php echo form_input($data_correo);?></td>
          <td width="10"></td>
          <td> <?php echo form_label('Estado:');?></td>
          
          <td> <?php echo form_checkbox($data_checkbox);?></td>
          <td> <?php echo form_label('Activo');?></td>
            
        </tr> 
        <tr>
          <td> <?php echo form_label('Tipo');?></td>
          <td> <?php echo form_dropdown('Tipo', $options,1);?></td>
          <td> <?php echo form_submit('ingresar','Ingresar Persona');?></td>
        </tr>
       <?php echo form_close(); ?>  
        </table>
    </div>
</div>
