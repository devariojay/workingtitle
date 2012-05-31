<?php
/* Logintext Test cases generated on: 2012-05-31 17:05:19 : 1338477859*/
App::import('Model', 'Logintext');

class LogintextTestCase extends CakeTestCase {
	var $fixtures = array('app.logintext', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock', 'app.vote');

	function startTest() {
		$this->Logintext =& ClassRegistry::init('Logintext');
	}

	function endTest() {
		unset($this->Logintext);
		ClassRegistry::flush();
	}

}
?>