<?php
/* Tblock Test cases generated on: 2012-05-31 17:05:54 : 1338477954*/
App::import('Model', 'Tblock');

class TblockTestCase extends CakeTestCase {
	var $fixtures = array('app.tblock', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider');

	function startTest() {
		$this->Tblock =& ClassRegistry::init('Tblock');
	}

	function endTest() {
		unset($this->Tblock);
		ClassRegistry::flush();
	}

}
?>