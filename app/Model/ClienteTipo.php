<?php
App::uses('AppModel', 'Model');
/**
 * ClienteTipo Model
 *
 * @property Cliente $Cliente
 */
class ClienteTipo extends AppModel {

public $displayField = 'nombre_cli_tipo';


public $validate = array(
    'nombre_cli_tipo' => array(
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
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_tipo_id',
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
