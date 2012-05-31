<?php
/* Vote Test cases generated on: 2012-05-31 17:05:27 : 1338477987*/
App::import('Model', 'Vote');

class VoteTestCase extends CakeTestCase {
	var $fixtures = array('app.vote', 'app.organization', 'app.language', 'app.article', 'app.user', 'app.users_vote', 'app.dashboard', 'app.detail', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock');

	function startTest() {
		$this->Vote =& ClassRegistry::init('Vote');
	}

	function endTest() {
		unset($this->Vote);
		ClassRegistry::flush();
	}

}
?>