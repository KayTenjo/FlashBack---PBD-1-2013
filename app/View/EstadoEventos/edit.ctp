
<?php echo $this->Form->create('EstadoEvento'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>Edit Estado Evento</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

        <ul class="breadcrumb">
          <li><a href="#">gerente</a> <span class="divider">/</span></li>
          <li><a href="index">estadoEventos</a> <span class="divider">/</span></li>
          <li class="active">Edit</li>
        </ul>        

        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span9' >
              <div class="well">
                <h6>Edit Estado Evento</h6>
                <hr />

	<!--<?php echo __('Edit Estado Evento'); ?></legend>-->
	<?php
		echo $this->Form->input('id', array('class' =>'span9','placeholder' => 'Ingrese id'));
				//echo $this->Form->input('id', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese id'));
		echo '<hr /> ';
				echo $this->Form->input('nombre_estado_evt', array('class' =>'span9','placeholder' => 'Ingrese nombre_estado_evt'));
				//echo $this->Form->input('nombre_estado_evt', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese nombre_estado_evt'));
		echo '<hr /> ';
				echo $this->Form->input('desc_estado_evt', array('class' =>'span9','placeholder' => 'Ingrese desc_estado_evt'));
				//echo $this->Form->input('desc_estado_evt', array('type'=>'text','class' =>'span9','placeholder' => 'Ingrese desc_estado_evt'));
		echo '<hr /> ';
		$this->Form->button("Submit Form", array("type" => "submit","class" => "btn btn-primary"));	?> 
		<button class='btn btn-primary'>Guardar</button>
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






<!--


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EstadoEvento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EstadoEvento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estado Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
--!>


