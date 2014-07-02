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
require_once ('/home/ivan/public_www/fit_day/app/Vendor/classes/VkPhpSdk.php');
require_once ('/home/ivan/public_www/fit_day/app/Vendor/classes/Oauth2Proxy.php');

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
	$oauth2Proxy = new Oauth2Proxy(
    '4438108', // client id
    'F27VDncCkxpN5aAFWW8G', // client secret
    'https://oauth.vk.com/access_token', // access token url
    'https://oauth.vk.com/authorize', // dialog uri
    'code', // response type
    'http://fit_day.com/users/vklogin', // redirect url
	'offline,notify,friends,photos,audio,video,wall' // scope
);

// Try to authorize client
if($oauth2Proxy->authorize() === true)
{
	var_dump($oauth2Proxy->getAccessToken());exit;
	// Init vk.com SDK
	$vkPhpSdk = new VkPhpSdk();
	$vkPhpSdk->setAccessToken($oauth2Proxy->getAccessToken());
	$vkPhpSdk->setUserId($oauth2Proxy->getUserId());

	// API call - get profile
	$result = $vkPhpSdk->api('getProfiles', array(
		'uids' => $vkPhpSdk->getUserId(),
		'fields' => 'uid, first_name, last_name, nickname, screen_name, photo_big',
	));
	echo 'My profile: <br />';
	echo '<pre>';
	print_r($result);
	echo '</pre>';
	
	// API call - wall post
	$result = $vkPhpSdk->api('wall.post', array(
		'owner_id' => $vkPhpSdk->getUserId(),
		'message' => 'Wellcome to vkPhpSdk!',
	));
	echo 'Wall post response: <br />';
	echo '<pre>';
	print_r($result);
	echo '</pre>';	
}
else {
	
	echo 'Error occurred';
	
		}}



	

	

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
