<?php
/* Lblocks Test cases generated on: 2012-05-31 17:05:06 : 1338477846*/
App::import('Controller', 'Lblocks');

class TestLblocksController extends LblocksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LblocksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.lblock', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.footerblock', 'app.footerlink', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock', 'app.vote');

	function startTest() {
		$this->Lblocks =& new TestLblocksController();
		$this->Lblocks->constructClasses();
	}

	function endTest() {
		unset($this->Lblocks);
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