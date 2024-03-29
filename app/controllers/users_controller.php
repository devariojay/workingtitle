<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $components = array('Session');
	
	function beforeFilter(){
		
		parent::beforeFilter();
		$this->Auth->allow('add');
		
		if($this->action == 'add' || $this->action == 'edit'){
			$this->Auth->authenticate = $this->User;
		}	
		
	}	
	
	function login() {
		
		if($this->_loggedIn()){
					
			$this->redirect(array('action' => 'view', $this->Auth->user('id')));
			
		}
		
	}
	
	function logout() {
		
		$this->redirect($this->Auth->logout());
		
	}

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->User->Language->find('list');
		$votes = $this->User->Vote->find('list');
		$this->set(compact('languages', 'votes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$languages = $this->User->Language->find('list');
		$votes = $this->User->Vote->find('list');
		$this->set(compact('languages', 'votes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>