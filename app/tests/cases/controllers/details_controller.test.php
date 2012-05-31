<?php
/* Details Test cases generated on: 2012-05-31 17:05:15 : 1338477795*/
App::import('Controller', 'Details');

class TestDetailsController extends DetailsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DetailsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.detail', 'app.organization', 'app.language');

	function startTest() {
		$this->Details =& new TestDetailsController();
		$this->Details->constructClasses();
	}

	function endTest() {
		unset($this->Details);
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