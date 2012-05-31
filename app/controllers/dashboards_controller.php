<?php
class DashboardsController extends AppController {

	var $name = 'Dashboards';

	function index() {
		$this->Dashboard->recursive = 0;
		$this->set('dashboards', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid dashboard', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dashboard', $this->Dashboard->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Dashboard->create();
			if ($this->Dashboard->save($this->data)) {
				$this->Session->setFlash(__('The dashboard has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dashboard could not be saved. Please, try again.', true));
			}
		}
		$languages = $this->Dashboard->Language->find('list');
		$this->set(compact('languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid dashboard', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dashboard->save($this->data)) {
				$this->Session->setFlash(__('The dashboard has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dashboard could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dashboard->read(null, $id);
		}
		$languages = $this->Dashboard->Language->find('list');
		$this->set(compact('languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for dashboard', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dashboard->delete($id)) {
			$this->Session->setFlash(__('Dashboard deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Dashboard was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>