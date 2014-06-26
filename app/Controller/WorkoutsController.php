<?php
App::uses('AppController', 'Controller');
/**
 * Workouts Controller
 *
 * @property Workout $Workout
 * @property PaginatorComponent $Paginator
 * @property nComponent $n
 * @property SessionComponent $Session
 */
class WorkoutsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Workout->recursive = 0;
		$this->set('workouts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Workout->exists($id)) {
			throw new NotFoundException(__('Invalid workout'));
		}
		$options = array('conditions' => array('Workout.' . $this->Workout->primaryKey => $id));
		$this->set('workout', $this->Workout->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Workout->create();
			if ($this->Workout->save($this->request->data)) {
				$this->Session->setFlash(__('The workout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The workout could not be saved. Please, try again.'));
			}
		}
		$users = $this->Workout->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Workout->exists($id)) {
			throw new NotFoundException(__('Invalid workout'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Workout->save($this->request->data)) {
				$this->Session->setFlash(__('The workout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The workout could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Workout.' . $this->Workout->primaryKey => $id));
			$this->request->data = $this->Workout->find('first', $options);
		}
		$users = $this->Workout->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Workout->id = $id;
		if (!$this->Workout->exists()) {
			throw new NotFoundException(__('Invalid workout'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Workout->delete()) {
			$this->Session->setFlash(__('The workout has been deleted.'));
		} else {
			$this->Session->setFlash(__('The workout could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
