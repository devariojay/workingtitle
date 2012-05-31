<?php
/* Slider Test cases generated on: 2012-05-31 17:05:39 : 1338477939*/
App::import('Model', 'Slider');

class SliderTestCase extends CakeTestCase {
	var $fixtures = array('app.slider', 'app.language', 'app.article', 'app.user', 'app.dashboard', 'app.detail', 'app.organization', 'app.vote', 'app.footerblock', 'app.footerlink', 'app.lblock', 'app.logintext', 'app.navigation', 'app.orgtext', 'app.rblock', 'app.registertext', 'app.signupblock', 'app.tblock');

	function startTest() {
		$this->Slider =& ClassRegistry::init('Slider');
	}

	function endTest() {
		unset($this->Slider);
		ClassRegistry::flush();
	}

}
?>