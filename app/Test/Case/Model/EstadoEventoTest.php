<?php
App::uses('EstadoEvento', 'Model');

/**
 * EstadoEvento Test Case
 *
 */
class EstadoEventoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estado_evento',
		'app.evento',
		'app.evento_tipo',
		'app.solicitud_cotizacione',
		'app.estado',
		'app.cliente',
		'app.cliente_tipo',
		'app.recinto_tipo',
		'app.recinto',
		'app.evento_tipos_recinto_tipo',
		'app.participante_tipo',
		'app.participante',
		'app.participante_tipos_solicitud_cotizacione',
		'app.evento_tipos_participante_tipo',
		'app.recurso_tipo',
		'app.recurso',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.eventos_recurso',
		'app.propiedade',
		'app.medida',
		'app.medidas_propiedade',
		'app.propiedades_recurso_tipo',
		'app.propiedades_recurso',
		'app.evento_tipos_recurso_tipo',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.actividades_evento',
		'app.itinerario_participante',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EstadoEvento = ClassRegistry::init('EstadoEvento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EstadoEvento);

		parent::tearDown();
	}

}
