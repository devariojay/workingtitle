<?php
class LogintextsController extends AppController {

	var $name = 'Logintexts';

	function index() {
		$this->Logintext->recursive = 0;
		$this->set('logintexts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid logintext', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('logintext', $this->Logintext->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Logintext->create();
			if ($this->Logintext->save($this->data)) {
				$this->Session->setFlash(__('The logintext has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The logintext could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->Logintext->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid logintext', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Logintext->save($this->data)) {
				$this->Session->setFlash(__('The logintext has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The logintext could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Logintext->read(null, $id);
		}
		$languages = $this->Logintext->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for logintext', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Logintext->delete($id)) {
			$this->Session->setFlash(__('Logintext deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Logintext was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>