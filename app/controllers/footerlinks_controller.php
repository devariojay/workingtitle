<?php
class FooterlinksController extends AppController {

	var $name = 'Footerlinks';

	function index() {
		$this->Footerlink->recursive = 0;
		$this->set('footerlinks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid footerlink', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('footerlink', $this->Footerlink->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Footerlink->create();
			if ($this->Footerlink->save($this->data)) {
				$this->Session->setFlash(__('The footerlink has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The footerlink could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->Footerlink->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid footerlink', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Footerlink->save($this->data)) {
				$this->Session->setFlash(__('The footerlink has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The footerlink could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Footerlink->read(null, $id);
		}
		$languages = $this->Footerlink->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for footerlink', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Footerlink->delete($id)) {
			$this->Session->setFlash(__('Footerlink deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Footerlink was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>