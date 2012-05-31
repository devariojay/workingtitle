<?php
/* Detail Test cases generated on: 2012-05-31 17:05:14 : 1338477794*/
App::import('Model', 'Detail');

class DetailTestCase extends CakeTestCase {
	var $fixtures = array('app.detail', 'app.organization', 'app.language');

	function startTest() {
		$this->Detail =& ClassRegistry::init('Detail');
	}

	function endTest() {
		unset($this->Detail);
		ClassRegistry::flush();
	}

}
?>