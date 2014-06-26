<?php
App::uses('AppController', 'Controller');
/**
 * SetWorkouts Controller
 *
 * @property SetWorkout $SetWorkout
 * @property PaginatorComponent $Paginator
 * @property nComponent $n
 * @property SessionComponent $Session
 */
class SetWorkoutsController extends AppController {

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
		$this->SetWorkout->recursive = 0;
		$this->set('setWorkouts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SetWorkout->exists($id)) {
			throw new NotFoundException(__('Invalid set workout'));
		}
		$options = array('conditions' => array('SetWorkout.' . $this->SetWorkout->primaryKey => $id));
		$this->set('setWorkout', $this->SetWorkout->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SetWorkout->create();
			if ($this->SetWorkout->save($this->request->data)) {
				$this->Session->setFlash(__('The set workout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The set workout could not be saved. Please, try again.'));
			}
		}
		$workouts = $this->SetWorkout->Workout->find('list');
		$this->set(compact('workouts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SetWorkout->exists($id)) {
			throw new NotFoundException(__('Invalid set workout'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SetWorkout->save($this->request->data)) {
				$this->Session->setFlash(__('The set workout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The set workout could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SetWorkout.' . $this->SetWorkout->primaryKey => $id));
			$this->request->data = $this->SetWorkout->find('first', $options);
		}
		$workouts = $this->SetWorkout->Workout->find('list');
		$this->set(compact('workouts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SetWorkout->id = $id;
		if (!$this->SetWorkout->exists()) {
			throw new NotFoundException(__('Invalid set workout'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SetWorkout->delete()) {
			$this->Session->setFlash(__('The set workout has been deleted.'));
		} else {
			$this->Session->setFlash(__('The set workout could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
