<?php
/* Registertext Test cases generated on: 2012-05-31 17:05:19 : 1338477919*/
App::import('Model', 'Registertext');

class RegistertextTestCase extends CakeTestCase {
	var $fixtures = array('app.registertext', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.signupblock', 'app.slider', 'app.tblock');

	function startTest() {
		$this->Registertext =& ClassRegistry::init('Registertext');
	}

	function endTest() {
		unset($this->Registertext);
		ClassRegistry::flush();
	}

}
?>