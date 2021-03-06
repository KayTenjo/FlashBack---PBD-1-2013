<?php
App::uses('EmpleadosController', 'Controller');

/**
 * EmpleadosController Test Case
 *
 */
class EmpleadosControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.empleado',
		'app.empleado_tipo',
		'app.evento',
		'app.recinto',
		'app.recinto_tipo',
		'app.solicitud_cotizacione',
		'app.estado',
		'app.evento_tipo',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.actividades_evento',
		'app.actividades_solicitud_cotizacione',
		'app.participante_tipo',
		'app.participante',
		'app.evento_tipos_participante_tipo',
		'app.participante_tipos_solicitud_cotizacione',
		'app.evento_tipos_recinto_tipo',
		'app.recurso_tipo',
		'app.recurso',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.eventos_recurso',
		'app.propiedade',
		'app.propiedades_recurso',
		'app.medida',
		'app.propiedades_recurso_tipo',
		'app.medidas_propiedade',
		'app.evento_tipos_recurso_tipo',
		'app.cliente',
		'app.cliente_tipo',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.itinerario_participante',
		'app.empleados_evento'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}

}
