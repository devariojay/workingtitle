<?php
/* Footerblock Test cases generated on: 2012-05-31 17:05:28 : 1338477808*/
App::import('Model', 'Footerblock');

class FooterblockTestCase extends CakeTestCase {
	var $fixtures = array('app.footerblock', 'app.language');

	function startTest() {
		$this->Footerblock =& ClassRegistry::init('Footerblock');
	}

	function endTest() {
		unset($this->Footerblock);
		ClassRegistry::flush();
	}

}
?>