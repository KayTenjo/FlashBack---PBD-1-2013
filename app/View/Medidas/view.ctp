 <div class="matter">
      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2><?php echo __('Medida'); ?></h2>
          <p>Mostrando información específica</p>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->
	<?php echo $this->TwitterBootstrap->add_crumb("medidas", array('controller' => 'Medida', 'action' => 'index'));echo $this->TwitterBootstrap->add_crumb("Ver Medida", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->
        <hr />
        <div class="box-body">
          
                     <!-- Pricing table -->                     
                     <!-- Price details. Note down the class name before you edit. -->
                     <div class="row-fluid">
                     
                        <div class="span8 offset2">
                        
                           
                           <!-- Pricing table #1. -->
                           <div class="pricel center">
                                 <div class="phead-top b-orange">
                                    <!-- Title -->
                                    <h4>Información del <?php echo __('Medida').' '; ?> <?php echo $medida['Medida']['id']; ?></h4>
                                 </div>
                                 <div class="arrow-down"></div>
                              <div class="plist">
                                 <!-- List -->
				<ul>

		<li><?php echo '<div class="col-l" style = "text-align: right;"> Id </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($medida['Medida']['id'])." &nbsp</div>";  ?></li>		<li><?php echo '<div class="col-l" style = "text-align: right;"> Nombre </div> '; ?>		<?php echo ":<div class='col-r' style = 'text-align: left;'>".h($medida['Medida']['nombre'])." &nbsp</div>";  ?></li></ul>
                              </div>

                              <div class="pbutton">  
                                 <!-- button -->
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $medida['Medida']['id']), array('class'=>'btn')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $medida['Medida']['id']),  array('class'=>'btn'), __('¿Estás seguro de que quieres eliminar este Medida?', $medida['Medida']['id'])); ?>

                              </div>
                           </div>
                        </div>
                     </div>
		
<!--<hr />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Medida'), array('action' => 'edit', $medida['Medida']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Medida'), array('action' => 'delete', $medida['Medida']['id']), null, __('Are you sure you want to delete # %s?', $medida['Medida']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Medidas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medida'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades Recurso Tipos'), array('controller' => 'propiedades_recurso_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedades Recurso Tipo'), array('controller' => 'propiedades_recurso_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="accordion" id="accordion">
	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Propiedades Recurso Tipos'); ?></h5>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($medida['PropiedadesRecursoTipo'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Medida Id'); ?></th>
		<th><?php echo __('Propiedade Id'); ?></th>
		<th><?php echo __('Recurso Tipo Id'); ?></th>
		<th><?php echo __('Maximo  Medida'); ?></th>
		<th><?php echo __('Minimo Medida'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($medida['PropiedadesRecursoTipo'] as $propiedadesRecursoTipo): ?>
		<tr>
			<td><?php echo $propiedadesRecursoTipo['id']; ?></td>
			<td><?php echo $propiedadesRecursoTipo['medida_id']; ?></td>
			<td><?php echo $propiedadesRecursoTipo['propiedade_id']; ?></td>
			<td><?php echo $propiedadesRecursoTipo['recurso_tipo_id']; ?></td>
			<td><?php echo $propiedadesRecursoTipo['maximo__medida']; ?></td>
			<td><?php echo $propiedadesRecursoTipo['minimo_medida']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'propiedades_recurso_tipos', 'action' => 'view', $propiedadesRecursoTipo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'propiedades_recurso_tipos', 'action' => 'edit', $propiedadesRecursoTipo['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'propiedades_recurso_tipos', 'action' => 'delete', $propiedadesRecursoTipo['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $propiedadesRecursoTipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Propiedades Recurso Tipo'), array('controller' => 'propiedades_recurso_tipos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>

	<hr />
	<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                           <!-- Title with experience details. -->
                  <h5><?php echo __(' <i class="icon-chevron-down"></i> Relación con Propiedades'); ?></h5>
                </a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
                 <div class="accordion-inner">

	<?php if (!empty($medida['Propiedade'])): ?>
	<table class="table table-striped table-bordered table-hover">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
        <tbody>

	<?php
		$i = 0;
		foreach ($medida['Propiedade'] as $propiedade): ?>
		<tr>
			<td><?php echo $propiedade['id']; ?></td>
			<td><?php echo $propiedade['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'propiedades', 'action' => 'view', $propiedade['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'propiedades', 'action' => 'edit', $propiedade['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'propiedades', 'action' => 'delete', $propiedade['id']), null, __('¿Estás segudo de que quieres eliminar el elemento # %s?', $propiedade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Nuevo Propiedade'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	     </div></div></div>


</div>

</div>
</div>
</div>
                
