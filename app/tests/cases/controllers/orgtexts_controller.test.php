<?php
/* Orgtexts Test cases generated on: 2012-05-31 17:05:49 : 1338477889*/
App::import('Controller', 'Orgtexts');

class TestOrgtextsController extends OrgtextsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OrgtextsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.orgtext', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock');

	function startTest() {
		$this->Orgtexts =& new TestOrgtextsController();
		$this->Orgtexts->constructClasses();
	}

	function endTest() {
		unset($this->Orgtexts);
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