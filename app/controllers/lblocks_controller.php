<?php
class LblocksController extends AppController {

	var $name = 'Lblocks';

	function index() {
		$this->Lblock->recursive = 0;
		$this->set('lblocks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid lblock', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('lblock', $this->Lblock->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Lblock->create();
			if ($this->Lblock->save($this->data)) {
				$this->Session->setFlash(__('The lblock has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lblock could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->Lblock->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid lblock', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Lblock->save($this->data)) {
				$this->Session->setFlash(__('The lblock has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lblock could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lblock->read(null, $id);
		}
		$languages = $this->Lblock->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for lblock', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Lblock->delete($id)) {
			$this->Session->setFlash(__('Lblock deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Lblock was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>