<?php
/* Tblocks Test cases generated on: 2012-05-31 17:05:56 : 1338477956*/
App::import('Controller', 'Tblocks');

class TestTblocksController extends TblocksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TblocksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tblock', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider');

	function startTest() {
		$this->Tblocks =& new TestTblocksController();
		$this->Tblocks->constructClasses();
	}

	function endTest() {
		unset($this->Tblocks);
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