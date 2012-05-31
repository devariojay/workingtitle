<?php
/* Registertexts Test cases generated on: 2012-05-31 17:05:20 : 1338477920*/
App::import('Controller', 'Registertexts');

class TestRegistertextsController extends RegistertextsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RegistertextsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.registertext', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.signupblock', 'app.slider', 'app.tblock');

	function startTest() {
		$this->Registertexts =& new TestRegistertextsController();
		$this->Registertexts->constructClasses();
	}

	function endTest() {
		unset($this->Registertexts);
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