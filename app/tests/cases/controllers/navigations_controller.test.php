<?php
/* Navigations Test cases generated on: 2012-05-31 17:05:30 : 1338477870*/
App::import('Controller', 'Navigations');

class TestNavigationsController extends NavigationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NavigationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.navigation', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock', 'app.vote');

	function startTest() {
		$this->Navigations =& new TestNavigationsController();
		$this->Navigations->constructClasses();
	}

	function endTest() {
		unset($this->Navigations);
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