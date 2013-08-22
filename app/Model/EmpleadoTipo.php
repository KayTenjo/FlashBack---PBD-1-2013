<?php
App::uses('AppModel', 'Model');
/**
 * EmpleadoTipo Model
 *
 * @property Empleado $Empleado
 */
class EmpleadoTipo extends AppModel {

public $displayField = 'nombre_empt';

public $validate = array(
    'nombre_empt' => array(
	'unico' => array(
		'rule'    => 'isUnique',
		'message' => 'Este tipo de recurso ya ha sido ingresado.',
		'required' => true,
	    	),
	'alfanumerico' => array(
		'rule' => 'alphanumeric',
		'required' => true,
		'message' => 'Ingrese sólo caracteres alfanuméricos.'
		),
	)
);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Empleado' => array(
			'className' => 'Empleado',
			'foreignKey' => 'empleado_tipo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
