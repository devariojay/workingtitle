<?php
/* Lblock Test cases generated on: 2012-05-31 17:05:05 : 1338477845*/
App::import('Model', 'Lblock');

class LblockTestCase extends CakeTestCase {
	var $fixtures = array('app.lblock', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.footerblock', 'app.footerlink', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock', 'app.vote');

	function startTest() {
		$this->Lblock =& ClassRegistry::init('Lblock');
	}

	function endTest() {
		unset($this->Lblock);
		ClassRegistry::flush();
	}

}
?>