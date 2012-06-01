<?php
/* Role Test cases generated on: 2012-05-31 21:05:54 : 1338491574*/
App::import('Model', 'Role');

class RoleTestCase extends CakeTestCase {
	var $fixtures = array('app.role', 'app.user', 'app.language', 'app.article', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.users_vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock');

	function startTest() {
		$this->Role =& ClassRegistry::init('Role');
	}

	function endTest() {
		unset($this->Role);
		ClassRegistry::flush();
	}

}
?>