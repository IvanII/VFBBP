<?php
App::uses('AppController', 'Controller');
App::uses('Security', 'Utility');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property nComponent $n
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			$this->request->data['User']['password'] = Security::hash($this->request->data['User']['password']);
			$logincheck = $this->request->data['User']['login'];
			if ($this->User->findBylogin($logincheck)) {
				$this->Session->setFlash(('Sorry,but no!'));
			}

			elseif ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

	private function __login() {
		if ($this->request->is('post')) {
			$login = $this->request->data['User']['login'];
			$pass = Security::hash($this->request->data['User']['password']);
			$lg = $this->User->findBylogin($login);
			if ($lg) {	
				$this->Session->setFlash(__('Hello!'. $login));
				return $this->redirect($this->referer());
			}

			else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}	
	}

	public function login() {

			$this->__login();

	}

	public function vklogin() {

		if ($this->request->is('get')) {
			$vkcode = $this->request->query['code'];
			$this->redirect("https://oauth.vk.com/access_token?client_id=4438108&client_secret=F27VDncCkxpN5aAFWW8G&code={$vkcode}&redirect_uri=fit_day/users/vklogin");
			
		}		
	}

	// public function vkpostlogin() {
	// 	var_dump($this->request->query);
	// 	exit;
	// } 



	

	

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['User']['password'] = Security::hash($this->request->data['User']['password']);
			$logincheck = $this->request->data['User']['login'];
			if ($this->User->findBylogin($logincheck)) {
				$this->Session->setFlash(('Sorry,but no!'));
			}

			elseif ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
