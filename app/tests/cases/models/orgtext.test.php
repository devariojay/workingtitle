<?php
/* Orgtext Test cases generated on: 2012-05-31 17:05:49 : 1338477889*/
App::import('Model', 'Orgtext');

class OrgtextTestCase extends CakeTestCase {
	var $fixtures = array('app.orgtext', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock');

	function startTest() {
		$this->Orgtext =& ClassRegistry::init('Orgtext');
	}

	function endTest() {
		unset($this->Orgtext);
		ClassRegistry::flush();
	}

}
?>