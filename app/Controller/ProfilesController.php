<?php
App::uses('AppController', 'Controller');

/**
 * Profiles Controller
 *
 * @property Profile $Profile
 * @property PaginatorComponent $Paginator
 * @property nComponent $n
 * @property SessionComponent $Session
 */




class ProfilesController extends AppController {

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
		$this->Profile->recursive = 0;
		$this->set('Profiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid Profile'));
		}
		$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
		$this->set('Profile', $this->Profile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profile->create();
			$this->request->data;
			$this->Profile->save($this->request->data); 
			$this->Session->setFlash(__('The Profile has been saved.'));
			return $this->redirect(array('action' => 'index'));

		}

		// else

		// {

		// 	$this->Session->setFlash('NO!');
		// }

	}
				
			
		
	

	
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid Profile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Profile']['password'] = Security::hash($this->request->data['Profile']['password']);
			$logincheck = $this->request->data['Profile']['login'];
			if ($this->Profile->findBylogin($logincheck)) {
				$this->Session->setFlash(('Sorry,but no!'));
			}

			elseif ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The Profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Profile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
			$this->request->data = $this->Profile->find('first', $options);
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
		$this->Profile->id = $id;
		if (!$this->Profile->exists()) {
			throw new NotFoundException(__('Invalid Profile'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Profile->delete()) {
			$this->Session->setFlash(__('The Profile has been deleted.'));
		} else {
			$this->Session->setFlash(__('The Profile could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	
}
?>