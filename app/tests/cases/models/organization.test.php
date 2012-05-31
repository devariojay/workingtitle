<?php
/* Organization Test cases generated on: 2012-05-31 17:05:39 : 1338477879*/
App::import('Model', 'Organization');

class OrganizationTestCase extends CakeTestCase {
	var $fixtures = array('app.organization', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.slider', 'app.tblock', 'app.vote');

	function startTest() {
		$this->Organization =& ClassRegistry::init('Organization');
	}

	function endTest() {
		unset($this->Organization);
		ClassRegistry::flush();
	}

}
?>