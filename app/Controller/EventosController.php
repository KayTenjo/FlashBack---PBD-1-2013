<?php
App::uses('AppController', 'Controller');
/**
 * Eventos Controller
 *
 * @property Evento $Evento
 * @property PaginatorComponent $Paginator
 */
class EventosController extends AppController {

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
	public function index() {
		$this->Evento->recursive = 0;
		$this->set('eventos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Invalid evento'));
		}
		$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
		$this->set('evento', $this->Evento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Evento->create();
			if ($this->Evento->save($this->request->data)) {
				$this->Session->setFlash(__('The evento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento could not be saved. Please, try again.'));
			}
		}
		$eventoTipos = $this->Evento->EventoTipo->find('list');
		$clientes = $this->Evento->Cliente->find('list');
		$recintos = $this->Evento->Recinto->find('list');
		$estadoEventos = $this->Evento->EstadoEvento->find('list');
		$recursos = $this->Evento->Recurso->find('list');
		$empleados = $this->Evento->Empleado->find('list');
		$actividades = $this->Evento->Actividade->find('list');
		$this->set(compact('eventoTipos', 'clientes', 'recintos', 'estadoEventos', 'recursos', 'empleados', 'actividades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Invalid evento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Evento->save($this->request->data)) {
				$this->Session->setFlash(__('The evento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
			$this->request->data = $this->Evento->find('first', $options);
		}
		$eventoTipos = $this->Evento->EventoTipo->find('list');
		$clientes = $this->Evento->Cliente->find('list');
		$recintos = $this->Evento->Recinto->find('list');
		$estadoEventos = $this->Evento->EstadoEvento->find('list');
		$recursos = $this->Evento->Recurso->find('list');
		$empleados = $this->Evento->Empleado->find('list');
		$actividades = $this->Evento->Actividade->find('list');
		$this->set(compact('eventoTipos', 'clientes', 'recintos', 'estadoEventos', 'recursos', 'empleados', 'actividades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Evento->id = $id;
		if (!$this->Evento->exists()) {
			throw new NotFoundException(__('Invalid evento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Evento->delete()) {
			$this->Session->setFlash(__('Evento deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Evento was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}