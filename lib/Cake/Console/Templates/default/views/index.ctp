<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<? 
	   echo '<?php echo $this->TwitterBootstrap->add_crumb("' . $pluralHumanName . '", null);';
	   echo 'echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>';
		 ?>
		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3><?php echo $pluralHumanName; ?></h3>
                    <!-- Para -->
                    <p>Listado de ...</p>
		    <div style= "text-align: right; padding-right: 10%">
		    <?php 

			echo "<?php ";
			echo 'echo $this->Html->link( "<button class=\'btn btn-primary btn-lg\'>Agregar</button>", array("action" => "add"), array("escape" => false));';
			echo "?>"; //"action" => "add"
			?>
		     </div>
                 </div>
                 <div class="ysheet2"></div>
                 <div class="ysheet3"></div>
              </div>
            </div>

          <!-- Sheet ends -->




	<?php echo "<?php " ;
	echo "\$cantidad = \$this->Paginator->counter(array('format' => __('{:count}') ));";
	echo "if( strcmp( \$cantidad , '0') != 0 ){ ?> "; ?>

	
	<div class="box-body">
        <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>

	<?php foreach ($fields as $field): ?>
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}', '{$field}'); ?>"; ?></th>
	<?php endforeach; ?>

	<th class="actions"><?php echo "<?php echo __('Acciones'); ?>"; ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php
	echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}

		echo "\t\t<td class=\"actions\">\n";
		echo "\t\t\t<?php echo \$this->Html->link(__('Ver'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
		echo "\t\t\t<?php echo \$this->Html->link(__('Editar'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
		echo "\t\t\t<?php echo \$this->Form->postLink(__('Borrar'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
	</tbody>
                      </table>
                    </div>
	<p>
	<?php echo "<?php 
	echo \$this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}. Se han encontrado: {:count} resultados ')
	));
	?>"; ?>
	</p>

	<?php echo "<?php " ;
	echo "\$pag = \$this->Paginator->counter(array('format' => __('{:pages}') ));";
	echo "if( strcmp( \$pag , '1') != 0 ){ ?> "; ?>

	
	<div class="box-body">
		<ul class="pagination" style="text-align: center;">
		<ul>
	<?php
		echo "<?php\n";
		echo "\t\techo \$this->Paginator->prev('Anterior', array('tag' => 'li'));\n";
		echo "\t\techo \$this->Paginator->numbers(array('separator' => '', 'currentClass' => 'active activePaginacion','tag' => 'li'));\n";
		echo "\t\techo \$this->Paginator->next('Siguiente', array('tag' => 'li'));\n";
		echo "\t?>\n";
	?>
		</ul>
		</ul>
	</div>
	<?php echo " <?php } ?>";?>
		
	<?php echo " <?php } \n\t\t else { "; 
	     echo " echo \"<hr /> <h1 style='text-align: center'> Aún no se han ingresado ".$pluralHumanName."</h1> <hr />\"; } ?>";
	?>
	</div>
	</div>


	
</div>
