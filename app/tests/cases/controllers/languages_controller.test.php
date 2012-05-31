<?php
/* Languages Test cases generated on: 2012-05-31 17:05:58 : 1338477838*/
App::import('Controller', 'Languages');

class TestLanguagesController extends LanguagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LanguagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock', 'app.vote');

	function startTest() {
		$this->Languages =& new TestLanguagesController();
		$this->Languages->constructClasses();
	}

	function endTest() {
		unset($this->Languages);
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