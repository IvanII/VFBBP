<?php
App::uses('AppController', 'Controller');
/**
 * Sleeps Controller
 *
 * @property Sleep $Sleep
 * @property PaginatorComponent $Paginator
 * @property nComponent $n
 */
class SleepsController extends AppController {

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
		$this->Sleep->recursive = 0;
		$this->set('sleeps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sleep->exists($id)) {
			throw new NotFoundException(__('Invalid sleep'));
		}
		$options = array('conditions' => array('Sleep.' . $this->Sleep->primaryKey => $id));
		$this->set('sleep', $this->Sleep->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sleep->create();
			if ($this->Sleep->save($this->request->data)) {
				return $this->flash(__('The sleep has been saved.'), array('action' => 'index'));

			}
		}
		$users = $this->Sleep->User->find('list');
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
		if (!$this->Sleep->exists($id)) {
			throw new NotFoundException(__('Invalid sleep'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sleep->save($this->request->data)) {
				return $this->flash(__('The sleep has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Sleep.' . $this->Sleep->primaryKey => $id));
			$this->request->data = $this->Sleep->find('first', $options);
		}
		$users = $this->Sleep->User->find('list');
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
		$this->Sleep->id = $id;
		if (!$this->Sleep->exists()) {
			throw new NotFoundException(__('Invalid sleep'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sleep->delete()) {
			return $this->flash(__('The sleep has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The sleep could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}

	
