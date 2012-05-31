<?php
class SignupblocksController extends AppController {

	var $name = 'Signupblocks';

	function index() {
		$this->Signupblock->recursive = 0;
		$this->set('signupblocks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid signupblock', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('signupblock', $this->Signupblock->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Signupblock->create();
			if ($this->Signupblock->save($this->data)) {
				$this->Session->setFlash(__('The signupblock has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The signupblock could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->Signupblock->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid signupblock', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Signupblock->save($this->data)) {
				$this->Session->setFlash(__('The signupblock has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The signupblock could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Signupblock->read(null, $id);
		}
		$languages = $this->Signupblock->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for signupblock', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Signupblock->delete($id)) {
			$this->Session->setFlash(__('Signupblock deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Signupblock was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>