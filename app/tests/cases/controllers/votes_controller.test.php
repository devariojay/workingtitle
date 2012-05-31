<?php
/* Votes Test cases generated on: 2012-05-31 17:05:27 : 1338477987*/
App::import('Controller', 'Votes');

class TestVotesController extends VotesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VotesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.vote', 'app.organization', 'app.language', 'app.article', 'app.user', 'app.users_vote', 'app.dashboard', 'app.detail', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock');

	function startTest() {
		$this->Votes =& new TestVotesController();
		$this->Votes->constructClasses();
	}

	function endTest() {
		unset($this->Votes);
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