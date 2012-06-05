<?php
class FooterblocksController extends AppController {

	var $name = 'Footerblocks';

	function index() {
		$this->Footerblock->recursive = 0;
		$this->set('footerblocks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid footerblock', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('footerblock', $this->Footerblock->read(null, $id));
	}
	
	function footergrab($language = null){
		
		$this->Footerblock->recursive = 0;
		$foo = $this->Footerblock->find('all', array('conditions' => array('language_id' => $language), 'fields' => array('Footerblock.titletext', 'Footerblock.descriptiontext', 'Footerblock.linktext', 'Footerblock.link', 'Footerblock.image')));
		return $foo;
		
	}

	function add() {
		if (!empty($this->data)) {
			$this->Footerblock->create();
			if ($this->Footerblock->save($this->data)) {
				$this->Session->setFlash(__('The footerblock has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The footerblock could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->Footerblock->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid footerblock', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Footerblock->save($this->data)) {
				$this->Session->setFlash(__('The footerblock has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The footerblock could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Footerblock->read(null, $id);
		}
		$languages = $this->Footerblock->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for footerblock', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Footerblock->delete($id)) {
			$this->Session->setFlash(__('Footerblock deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Footerblock was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>