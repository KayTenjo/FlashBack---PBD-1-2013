<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<?php echo $this->TwitterBootstrap->add_crumb("Eventos", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Eventos</h3>
                    <!-- Para -->
                    <p>Listado de ...</p>
		    <div style= "text-align: right; padding-right: 10%">
		    <?php echo $this->Html->link( "<button class='btn btn-primary btn-lg'>Agregar</button>", array("action" => "add"), array("escape" => false));?>		     </div>
                 </div>
                 <div class="ysheet2"></div>
                 <div class="ysheet3"></div>
              </div>
            </div>

          <!-- Sheet ends -->




	<?php $cantidad = $this->Paginator->counter(array('format' => __('{:count}') ));if( strcmp( $cantidad , '0') != 0 ){ ?> 
	
	<div class="box-body">
        <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>

			<th><?php echo $this->Paginator->sort('id', 'id'); ?></th>
			<th><?php echo $this->Paginator->sort('recinto_id', 'recinto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_tipo_id', 'evento_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id', 'cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre', 'nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio', 'fecha_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_termino', 'fecha_termino'); ?></th>
			<th><?php echo $this->Paginator->sort('lista_invitados', 'lista_invitados'); ?></th>
			<th><?php echo $this->Paginator->sort('estado', 'estado'); ?></th>
			<th><?php echo $this->Paginator->sort('precio', 'precio'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion', 'descripcion'); ?></th>
	
	<th class="actions"><?php echo __('Acciones'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($eventos as $evento): ?>
		<td><?php echo h($evento['Evento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evento['Recinto']['id'], array('controller' => 'recintos', 'action' => 'view', $evento['Recinto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($evento['EventoTipo']['id'], array('controller' => 'evento_tipos', 'action' => 'view', $evento['EventoTipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($evento['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $evento['Cliente']['id'])); ?>
		</td>
		<td><?php echo h($evento['Evento']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['fecha_inicio']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['fecha_termino']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['lista_invitados']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['estado']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['precio']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['descripcion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $evento['Evento']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $evento['Evento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $evento['Evento']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $evento['Evento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
                      </table>
                    </div>
	<p>
	<?php 
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}. Se han encontrado: {:count} resultados ')
	));
	?>	</p>

	<?php $pag = $this->Paginator->counter(array('format' => __('{:pages}') ));if( strcmp( $pag , '1') != 0 ){ ?> 
	
	<div class="box-body">
		<ul class="pagination" style="text-align: center;">
		<ul>
	<?php
		echo $this->Paginator->prev('Anterior', array('tag' => 'li'));
		echo $this->Paginator->numbers(array('separator' => '', 'currentClass' => 'active activePaginacion','tag' => 'li'));
		echo $this->Paginator->next('Siguiente', array('tag' => 'li'));
	?>
		</ul>
		</ul>
	</div>
	 <?php } ?>		
	 <?php } 
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Eventos</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
