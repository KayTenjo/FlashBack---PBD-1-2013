

<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Agregando un tipo de vehículo</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index"></a> <span class="divider">/</span></li>
          <li class="active">Add</li>
        </ul>        
	<?php 
echo $this->Html->addCrumb('Agregar Tipo de Vehículo');
echo $this->Html->getCrumbs('<span class="divider">/</span>', 'Home');
	       ?>

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Add Vehiculo Tipo</h6>
                <hr />
	<?php echo $this->Form->create('VehiculoTipo'); ?>
	<!--<?php echo __('Add Vehiculo Tipo'); ?></legend>-->
	<?php
		echo $this->Form->input('nombre_veht', array('class' =>'span9','label' => 'holi','placeholder' => 'Ingrese el nombre del tipo de vehículo.'));
				//echo $this->Form->input('nombre_veht', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_veht'));
		echo '<hr /> ';
		$this->Form->button("Submit Form", array("type" => "submit","class" => "btn btn-primary"));	?> 
		<button class='btn btn-primary'>Guardar</button>
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>


