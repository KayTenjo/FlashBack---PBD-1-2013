<?php
App::uses('AppModel', 'Model');
/**
 * ParticipanteTipo Model
 *
 * @property Participante $Participante
 * @property SolicitudCotizacione $SolicitudCotizacione
 * @property EventoTipo $EventoTipo
 */

class ParticipanteTipo extends AppModel {

public $displayField = 'nombre_part';

public $validate = array(
    'nombre_part' => array(
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
		'Participante' => array(
			'className' => 'Participante',
			'foreignKey' => 'participante_tipo_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'SolicitudCotizacione' => array(
			'className' => 'SolicitudCotizacione',
			'joinTable' => 'participante_tipos_solicitud_cotizaciones',
			'foreignKey' => 'participante_tipo_id',
			'associationForeignKey' => 'solicitud_cotizacione_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'EventoTipo' => array(
			'className' => 'EventoTipo',
			'joinTable' => 'evento_tipos_participante_tipos',
			'foreignKey' => 'participante_tipo_id',
			'associationForeignKey' => 'evento_tipo_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
