<?php
/* Dashboards Test cases generated on: 2012-05-31 17:05:07 : 1338477787*/
App::import('Controller', 'Dashboards');

class TestDashboardsController extends DashboardsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DashboardsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.dashboard', 'app.language');

	function startTest() {
		$this->Dashboards =& new TestDashboardsController();
		$this->Dashboards->constructClasses();
	}

	function endTest() {
		unset($this->Dashboards);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>