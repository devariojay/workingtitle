<?php
/* Footerlink Test cases generated on: 2012-05-31 17:05:46 : 1338477826*/
App::import('Model', 'Footerlink');

class FooterlinkTestCase extends CakeTestCase {
	var $fixtures = array('app.footerlink', 'app.language');

	function startTest() {
		$this->Footerlink =& ClassRegistry::init('Footerlink');
	}

	function endTest() {
		unset($this->Footerlink);
		ClassRegistry::flush();
	}

}
?>