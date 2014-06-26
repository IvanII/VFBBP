<?php
App::uses('AppController', 'Controller');

/**
 * Diets Controller
 *
 * @property Diet $Diet
 * @property PaginatorComponent $Paginator
 * @property nComponent $n
 * @property SessionComponent $Session
 */
class DietsController extends AppController {

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
		$this->Diet->recursive = 0;
		$this->set('diets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Diet->exists($id)) {
			throw new NotFoundException(__('Invalid diet'));
		}
		$options = array('conditions' => array('Diet.' . $this->Diet->primaryKey => $id));
		$this->set('diet', $this->Diet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Diet->create();
			if ($this->Diet->save($this->request->data)) {
				$this->Session->setFlash(__('The diet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diet could not be saved. Please, try again.'));
			}
		}
		$users = $this->Diet->User->find('list');
		$menus = $this->Diet->Menu->find('list');
		$this->set(compact('users', 'menus'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Diet->exists($id)) {
			throw new NotFoundException(__('Invalid diet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Diet->save($this->request->data)) {
				$this->Session->setFlash(__('The diet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Diet.' . $this->Diet->primaryKey => $id));
			$this->request->data = $this->Diet->find('first', $options);
		}
		$users = $this->Diet->User->find('list');
		$menus = $this->Diet->Menu->find('list');
		$this->set(compact('users', 'menus'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Diet->id = $id;
		if (!$this->Diet->exists()) {
			throw new NotFoundException(__('Invalid diet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Diet->delete()) {
			$this->Session->setFlash(__('The diet has been deleted.'));
		} else {
			$this->Session->setFlash(__('The diet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
