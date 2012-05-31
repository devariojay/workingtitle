<?php
/* Footerblocks Test cases generated on: 2012-05-31 17:05:29 : 1338477809*/
App::import('Controller', 'Footerblocks');

class TestFooterblocksController extends FooterblocksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FooterblocksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.footerblock', 'app.language');

	function startTest() {
		$this->Footerblocks =& new TestFooterblocksController();
		$this->Footerblocks->constructClasses();
	}

	function endTest() {
		unset($this->Footerblocks);
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