<?php
/* Rblocks Test cases generated on: 2012-05-31 17:05:59 : 1338477899*/
App::import('Controller', 'Rblocks');

class TestRblocksController extends RblocksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RblocksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.rblock', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock');

	function startTest() {
		$this->Rblocks =& new TestRblocksController();
		$this->Rblocks->constructClasses();
	}

	function endTest() {
		unset($this->Rblocks);
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