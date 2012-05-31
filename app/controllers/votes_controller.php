<?php
class VotesController extends AppController {

	var $name = 'Votes';

	function index() {
		$this->Vote->recursive = 0;
		$this->set('votes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid vote', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('vote', $this->Vote->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Vote->create();
			if ($this->Vote->save($this->data)) {
				$this->Session->setFlash(__('The vote has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vote could not be saved. Please, try again.', true));
			}
		}
		$organizations = $this->Vote->Organization->find('list');
		$languages = $this->Vote->Language->find('list');
		$users = $this->Vote->User->find('list');
		$this->set(compact('organizations', 'languages', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid vote', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Vote->save($this->data)) {
				$this->Session->setFlash(__('The vote has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vote could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Vote->read(null, $id);
		}
		$organizations = $this->Vote->Organization->find('list');
		$languages = $this->Vote->Language->find('list');
		$users = $this->Vote->User->find('list');
		$this->set(compact('organizations', 'languages', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for vote', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Vote->delete($id)) {
			$this->Session->setFlash(__('Vote deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Vote was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>