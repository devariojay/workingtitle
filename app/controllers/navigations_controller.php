<?php
class NavigationsController extends AppController {

	var $name = 'Navigations';

	function index() {
		$this->Navigation->recursive = 0;
		$this->set('navigations', $this->paginate());
	}
	
	function menugrab($language = null) {
		$this->Navigation->recursive = 0;
		$nav = $this->Navigation->find('all', array('conditions' => array('language_id' => $language), 'fields' => array('Navigation.linkname', 'Navigation.link')));
		return $nav;		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid navigation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('navigation', $this->Navigation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Navigation->create();
			if ($this->Navigation->save($this->data)) {
				$this->Session->setFlash(__('The navigation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The navigation could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->Navigation->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid navigation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Navigation->save($this->data)) {
				$this->Session->setFlash(__('The navigation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The navigation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Navigation->read(null, $id);
		}
		$languages = $this->Navigation->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for navigation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Navigation->delete($id)) {
			$this->Session->setFlash(__('Navigation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Navigation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>