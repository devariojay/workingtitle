<?php
class OrganizationsController extends AppController {

	var $name = 'Organizations';

	function index() {
		$this->Organization->recursive = 0;
		$this->set('organizations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid organization', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('organization', $this->Organization->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Organization->create();
			if ($this->Organization->save($this->data)) {
				$this->Session->setFlash(__('The organization has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organization could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->Organization->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid organization', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Organization->save($this->data)) {
				$this->Session->setFlash(__('The organization has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organization could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Organization->read(null, $id);
		}
		$languages = $this->Organization->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for organization', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Organization->delete($id)) {
			$this->Session->setFlash(__('Organization deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Organization was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>