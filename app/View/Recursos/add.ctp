<script type="text/javascript">
function obtenerPropiedades(valor){
  $('#propi').load('/FlashBack/recursos/buscarPropiedades/'+valor+' #listaPropiedades');
}
</script>

<?php echo $this->Form->create('Recurso'); ?>
<div class="container-fluid">
        <!-- Title starts -->
        <div class="page-title">
          <h2>!!!Add Recurso</h2>
          <hr />
        </div>
        <!-- Title ends -->

        <!-- Breadcrumb starts -->

	<?php echo $this->TwitterBootstrap->add_crumb("recursos", 'index');echo $this->TwitterBootstrap->add_crumb("Add", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>
        <!-- Breadcrumb ends -->

        <hr />

        <!-- Content starts -->

        <div class="box-body">
          <div class="row-fluid">

            <div class='span6' >
              <div class="well">
                <hr />
	<?php
		echo $this->Form->input('recurso_tipo_id', array('class' =>'span12','label' => 'Ingrese recurso_tipo_id', 'placeholder' => '', 'onchange' => 'obtenerPropiedades(this.value)', 
      'empty' => '(Seleccione Una opción)',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('proveedore_id', array('class' =>'span12','label' => 'Ingrese proveedore_id', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
				echo $this->Form->input('cantidad', array('class' =>'span12','label' => 'Ingrese cantidad', 'placeholder' => '',
'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))));
		echo '<hr /> ';
			?>
	
	</div>
	     </div>
	     <div class="span6 ">
                <div class="well">
		<?php
echo '<h6> <?php echo Evento ?></h6> <hr />'; 		echo $this->Form->input('Evento', array('type' => 'select', 'multiple'=>'checkbox', 'label' => null) );
echo ' <div id="propi"> </div>';
echo $this->Form->button("Guardar", array("type" => "submit","class" => "btn btn-primary"));	?> 
              </div>

            </div>

          </div>
        </div>

        <!-- Content ends -->

      </div>






