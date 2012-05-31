<?php
/* Sliders Test cases generated on: 2012-05-31 17:05:47 : 1338477947*/
App::import('Controller', 'Sliders');

class TestSlidersController extends SlidersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SlidersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.slider', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.tblock');

	function startTest() {
		$this->Sliders =& new TestSlidersController();
		$this->Sliders->constructClasses();
	}

	function endTest() {
		unset($this->Sliders);
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