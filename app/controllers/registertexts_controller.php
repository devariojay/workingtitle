<?php
class RegistertextsController extends AppController {

	var $name = 'Registertexts';

	function index() {
		$this->Registertext->recursive = 0;
		$this->set('registertexts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid registertext', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('registertext', $this->Registertext->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Registertext->create();
			if ($this->Registertext->save($this->data)) {
				$this->Session->setFlash(__('The registertext has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registertext could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->Registertext->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid registertext', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Registertext->save($this->data)) {
				$this->Session->setFlash(__('The registertext has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registertext could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Registertext->read(null, $id);
		}
		$languages = $this->Registertext->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for registertext', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Registertext->delete($id)) {
			$this->Session->setFlash(__('Registertext deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Registertext was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>