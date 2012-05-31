<?php
/* Footerlinks Test cases generated on: 2012-05-31 17:05:47 : 1338477827*/
App::import('Controller', 'Footerlinks');

class TestFooterlinksController extends FooterlinksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FooterlinksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.footerlink', 'app.language');

	function startTest() {
		$this->Footerlinks =& new TestFooterlinksController();
		$this->Footerlinks->constructClasses();
	}

	function endTest() {
		unset($this->Footerlinks);
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