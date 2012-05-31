<?php
class RblocksController extends AppController {

	var $name = 'Rblocks';

	function index() {
		$this->Rblock->recursive = 0;
		$this->set('rblocks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid rblock', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('rblock', $this->Rblock->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Rblock->create();
			if ($this->Rblock->save($this->data)) {
				$this->Session->setFlash(__('The rblock has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rblock could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->Rblock->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid rblock', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Rblock->save($this->data)) {
				$this->Session->setFlash(__('The rblock has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rblock could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Rblock->read(null, $id);
		}
		$languages = $this->Rblock->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for rblock', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Rblock->delete($id)) {
			$this->Session->setFlash(__('Rblock deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Rblock was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>