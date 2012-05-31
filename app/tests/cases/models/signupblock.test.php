<?php
/* Signupblock Test cases generated on: 2012-05-31 17:05:29 : 1338477929*/
App::import('Model', 'Signupblock');

class SignupblockTestCase extends CakeTestCase {
	var $fixtures = array('app.signupblock', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.slider', 'app.tblock');

	function startTest() {
		$this->Signupblock =& ClassRegistry::init('Signupblock');
	}

	function endTest() {
		unset($this->Signupblock);
		ClassRegistry::flush();
	}

}
?>