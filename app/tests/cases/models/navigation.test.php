<?php
/* Navigation Test cases generated on: 2012-05-31 17:05:29 : 1338477869*/
App::import('Model', 'Navigation');

class NavigationTestCase extends CakeTestCase {
	var $fixtures = array('app.navigation', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock', 'app.vote');

	function startTest() {
		$this->Navigation =& ClassRegistry::init('Navigation');
	}

	function endTest() {
		unset($this->Navigation);
		ClassRegistry::flush();
	}

}
?>