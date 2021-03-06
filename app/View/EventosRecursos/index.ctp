<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<?php echo $this->TwitterBootstrap->add_crumb("Asignacion de Recursos", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Asignación de Recursos</h3>
                    <!-- Para -->
                    <p>En esta sección se podra observar y editar todos los recursos que se han sido seleccionados para un evento determinado. Para poder agregar nuevos recursos a un evento dirijase a editar evento.</p>
		    <div style= "text-align: right; padding-right: 10%">
		       </div>
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

			<th><?php echo $this->Paginator->sort('recurso_id', 'recurso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad', 'cantidad'); ?></th>
	
	<th class="actions"><?php echo __('Acciones'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($eventosRecursos as $eventosRecurso): ?>
		<td>
			<?php echo $this->Html->link($eventosRecurso['Recurso']['id'], array('controller' => 'recursos', 'action' => 'view', $eventosRecurso['Recurso']['id'])); ?>
		</td>
		<td><?php echo h($eventosRecurso['EventosRecurso']['cantidad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $eventosRecurso['EventosRecurso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $eventosRecurso['EventosRecurso']['id'], $eventosRecurso['EventosRecurso']['evento_id']) , null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $eventosRecurso['EventosRecurso']['id'])); ?>
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
		 else {  echo "<hr /> <h1 style='text-align: center'> Este evento no posee recursos</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
