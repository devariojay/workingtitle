<?php
class TblocksController extends AppController {

	var $name = 'Tblocks';

	function index() {
		$this->Tblock->recursive = 0;
		$this->set('tblocks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tblock', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tblock', $this->Tblock->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tblock->create();
			if ($this->Tblock->save($this->data)) {
				$this->Session->setFlash(__('The tblock has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tblock could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->Tblock->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tblock', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tblock->save($this->data)) {
				$this->Session->setFlash(__('The tblock has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tblock could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tblock->read(null, $id);
		}
		$languages = $this->Tblock->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tblock', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tblock->delete($id)) {
			$this->Session->setFlash(__('Tblock deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tblock was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>