<?php
/* Rblock Test cases generated on: 2012-05-31 17:05:59 : 1338477899*/
App::import('Model', 'Rblock');

class RblockTestCase extends CakeTestCase {
	var $fixtures = array('app.rblock', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock');

	function startTest() {
		$this->Rblock =& ClassRegistry::init('Rblock');
	}

	function endTest() {
		unset($this->Rblock);
		ClassRegistry::flush();
	}

}
?>