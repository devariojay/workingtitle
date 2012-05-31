<?php
/* Logintexts Test cases generated on: 2012-05-31 17:05:20 : 1338477860*/
App::import('Controller', 'Logintexts');

class TestLogintextsController extends LogintextsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LogintextsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.logintext', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock', 'app.vote');

	function startTest() {
		$this->Logintexts =& new TestLogintextsController();
		$this->Logintexts->constructClasses();
	}

	function endTest() {
		unset($this->Logintexts);
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