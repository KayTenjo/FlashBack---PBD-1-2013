
<?php echo $this->Form->create('Actividade'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>!!!Add Actividade</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("actividades", 'index');echo $this->TwitterBootstrap->add_crumb("Add", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('nombre', array('class' =>'span12','label' => 'Ingrese nombre', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('descripcion', array('class' =>'span12','label' => 'Ingrese descripcion', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo EventoTipo ?></h6> <hr />'; 		echo $this->Form->input('EventoTipo', array('type' => 'select', 'multiple'=>'checkbox', 'label' => null) );
echo '<h6> <?php echo Evento ?></h6> <hr />'; 		echo $this->Form->input('Evento', array('type' => 'select', 'multiple'=>'checkbox', 'label' => null) );
echo '<h6> <?php echo SolicitudCotizacione ?></h6> <hr />'; 		echo $this->Form->input('SolicitudCotizacione', array('type' => 'select', 'multiple'=>'checkbox', 'label' => null) );
echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






