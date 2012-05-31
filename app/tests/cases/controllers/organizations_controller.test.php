<?php
/* Organizations Test cases generated on: 2012-05-31 17:05:40 : 1338477880*/
App::import('Controller', 'Organizations');

class TestOrganizationsController extends OrganizationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OrganizationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.organization', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock', 'app.vote');

	function startTest() {
		$this->Organizations =& new TestOrganizationsController();
		$this->Organizations->constructClasses();
	}

	function endTest() {
		unset($this->Organizations);
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