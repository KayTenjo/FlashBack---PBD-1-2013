<?php
App::uses('AppController', 'Controller');
/**
 * SolicitudCotizaciones Controller
 *
 * @property SolicitudCotizacione $SolicitudCotizacione
 * @property PaginatorComponent $Paginator
 */
class SolicitudCotizacionesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index($estado = null) {
		$this->SolicitudCotizacione->recursive = 0;
		if($this->rol == 'cliente'){
		$user_id = $this->Session->read('Auth.User')['id'];
		$client = $this->Cliente->find('all', array(
			'conditions' => array('Cliente.user_id' => $user_id))
		);
		$c_id = $client[0]['Cliente']['id'];
				$this->paginate = array(
					'conditions' => array('SolicitudCotizacione.cliente_id' => $c_id),
					'limit' => 10
				    );
				$this->set('solicitudCotizaciones', $this->Paginator->paginate());		
		}else{
			if($estado != null){
				$this->paginate = array(
					'conditions' => array('SolicitudCotizacione.estado_id' => $estado),
					'limit' => 10
				    );
				$this->set('solicitudCotizaciones', $this->Paginator->paginate());

			}else{
				$this->set('solicitudCotizaciones', $this->Paginator->paginate());
			}
		}	
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SolicitudCotizacione->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud cotizacione'));
		}
		$options = array('conditions' => array('SolicitudCotizacione.' . $this->SolicitudCotizacione->primaryKey => $id));
		$this->set('solicitudCotizacione', $this->SolicitudCotizacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->rol() == 'gerente'){
			return $this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post')) {
			$this->SolicitudCotizacione->create();
			if ($this->SolicitudCotizacione->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud cotizacione has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud cotizacione could not be saved. Please, try again.'), 'ferror');
			}
		}
		$user_id = $this->Session->read('Auth.User')['id'];
		$client = $this->Cliente->find('all', array(
			'conditions' => array('Cliente.user_id' => $user_id))
		);
		$c_id = $client[0]['Cliente']['id'];

		$estados = $this->SolicitudCotizacione->Estado->find('list');
		$eventoTipos = $this->SolicitudCotizacione->EventoTipo->find('list');
		$clientes = $this->SolicitudCotizacione->Cliente->find('list');
		$recintoTipos = $this->SolicitudCotizacione->RecintoTipo->find('list');
		$participanteTipos = $this->SolicitudCotizacione->ParticipanteTipo->find('list');
		$actividades = $this->SolicitudCotizacione->Actividade->find('list');
		$this->set(compact('c_id','estados', 'eventoTipos', 'clientes', 'recintoTipos', 'participanteTipos', 'actividades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SolicitudCotizacione->exists($id)) {
			throw new NotFoundException(__('Invalid solicitud cotizacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SolicitudCotizacione->save($this->request->data)) {
				$this->Session->setFlash(__('The solicitud cotizacione has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The solicitud cotizacione could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('SolicitudCotizacione.' . $this->SolicitudCotizacione->primaryKey => $id));
			$this->request->data = $this->SolicitudCotizacione->find('first', $options);
		}
		$estados = $this->SolicitudCotizacione->Estado->find('list');
		$eventoTipos = $this->SolicitudCotizacione->EventoTipo->find('list');
		$clientes = $this->SolicitudCotizacione->Cliente->find('list');
		$recintoTipos = $this->SolicitudCotizacione->RecintoTipo->find('list', array(
				'joins' =>
                   array(
                    array(
                        'table' => 'evento_tipos_recinto_tipos',
                        'alias' => 'eventoTipoRecintoTipo',
                        'type' => 'INNER',
                        'foreignKey' => null,
                        'conditions'=> array('eventoTipoRecintoTipo.recinto_tipo_id = RecintoTipo.id',
                        	'eventoTipoRecintoTipo.evento_tipo_id' => $this->request->data['SolicitudCotizacione']['evento_tipo_id']
                        )
                    )
                  ))
         );
		$participanteTipos = $this->SolicitudCotizacione->ParticipanteTipo->find('list', array(
				'joins' =>
                   array(
                    array(
                        'table' => 'evento_tipos_participante_tipos',
                        'alias' => 'eventoTiposParticianteTipos',
                        'type' => 'INNER',
                        'foreignKey' => null,
                        'conditions'=> array('eventoTiposParticianteTipos.participante_tipo_id = ParticipanteTipo.id',
                        	'eventoTiposParticianteTipos.evento_tipo_id' =>$this->request->data['SolicitudCotizacione']['evento_tipo_id']
                        )
                    )
                  ))
        );
		$actividades = $this->SolicitudCotizacione->Actividade->find('list', array(
				'joins' =>
                   array(
                    array(
                        'table' => 'actividades_evento_tipos',
                        'alias' => 'actividadesEventoTipo',
                        'type' => 'INNER',
                        'foreignKey' => null,
                        'conditions'=> array('actividadesEventoTipo.actividade_id = Actividade.id',
                        	'actividadesEventoTipo.actividade_id' => $this->request->data['SolicitudCotizacione']['evento_tipo_id']
                        )
                    )
                  ))
         );
		$this->set(compact('estados', 'eventoTipos', 'clientes', 'recintoTipos', 'participanteTipos', 'actividades','id'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SolicitudCotizacione->id = $id;
		if (!$this->SolicitudCotizacione->exists()) {
			throw new NotFoundException(__('Invalid solicitud cotizacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SolicitudCotizacione->delete()) {
			$this->Session->setFlash(__('Solicitud cotizacione deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Solicitud cotizacione was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
	public function buscarParticipantesActividades($eventoTipo=null, $id=null ){
		$this->layout = 'ajax';
		$this->SolicitudCotizacione->recursive = -1;
		if($this->SolicitudCotizacione->exists($id)){
			$options = array('conditions' => array('SolicitudCotizacione.' . $this->SolicitudCotizacione->primaryKey => $id));
			$this->request->data = $this->SolicitudCotizacione->find('first', $options);
		}
		$participanteTipos = $this->SolicitudCotizacione->ParticipanteTipo->find('list', array(
				'joins' =>
                   array(
                    array(
                        'table' => 'evento_tipos_participante_tipos',
                        'alias' => 'eventoTiposParticianteTipos',
                        'type' => 'INNER',
                        'foreignKey' => null,
                        'conditions'=> array('eventoTiposParticianteTipos.participante_tipo_id = ParticipanteTipo.id',
                        	'eventoTiposParticianteTipos.evento_tipo_id' => $eventoTipo
                        )
                    )
                  ))
         );
		$actividades = $this->SolicitudCotizacione->Actividade->find('list', array(
				'joins' =>
                   array(
                    array(
                        'table' => 'actividades_evento_tipos',
                        'alias' => 'actividadesEventoTipo',
                        'type' => 'INNER',
                        'foreignKey' => null,
                        'conditions'=> array('actividadesEventoTipo.actividade_id = Actividade.id',
                        	'actividadesEventoTipo.actividade_id' => $eventoTipo
                        )
                    )
                  ))
         );
		$this->set(compact('participanteTipos', 'actividades','id'));
	}
	public function buscarRecintoTipo($eventoTipo=null, $id=null ){
		$this->layout = 'ajax';
		$this->SolicitudCotizacione->recursive = -1;
		if($this->SolicitudCotizacione->exists($id)){
			$options = array('conditions' => array('SolicitudCotizacione.' . $this->SolicitudCotizacione->primaryKey => $id));
			$this->request->data = $this->SolicitudCotizacione->find('first', $options);
		}
		$recintoTipos = $this->SolicitudCotizacione->RecintoTipo->find('list', array(
				'joins' =>
                   array(
                    array(
                        'table' => 'evento_tipos_recinto_tipos',
                        'alias' => 'eventoTipoRecintoTipo',
                        'type' => 'INNER',
                        'foreignKey' => null,
                        'conditions'=> array('eventoTipoRecintoTipo.recinto_tipo_id = RecintoTipo.id',
                        	'eventoTipoRecintoTipo.evento_tipo_id' => $eventoTipo
                        )
                    )
                  ))
         );
		$this->set(compact('recintoTipos'));
	}
}
