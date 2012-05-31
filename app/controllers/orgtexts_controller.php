<?php
class OrgtextsController extends AppController {

	var $name = 'Orgtexts';

	function index() {
		$this->Orgtext->recursive = 0;
		$this->set('orgtexts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid orgtext', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('orgtext', $this->Orgtext->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Orgtext->create();
			if ($this->Orgtext->save($this->data)) {
				$this->Session->setFlash(__('The orgtext has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orgtext could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->Orgtext->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid orgtext', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Orgtext->save($this->data)) {
				$this->Session->setFlash(__('The orgtext has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orgtext could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Orgtext->read(null, $id);
		}
		$languages = $this->Orgtext->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for orgtext', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Orgtext->delete($id)) {
			$this->Session->setFlash(__('Orgtext deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Orgtext was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>