<?php
/* Signupblocks Test cases generated on: 2012-05-31 17:05:30 : 1338477930*/
App::import('Controller', 'Signupblocks');

class TestSignupblocksController extends SignupblocksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SignupblocksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.signupblock', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.slider', 'app.tblock');

	function startTest() {
		$this->Signupblocks =& new TestSignupblocksController();
		$this->Signupblocks->constructClasses();
	}

	function endTest() {
		unset($this->Signupblocks);
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