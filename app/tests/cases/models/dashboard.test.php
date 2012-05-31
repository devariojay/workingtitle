<?php
/* Dashboard Test cases generated on: 2012-05-31 17:05:06 : 1338477786*/
App::import('Model', 'Dashboard');

class DashboardTestCase extends CakeTestCase {
	var $fixtures = array('app.dashboard', 'app.language');

	function startTest() {
		$this->Dashboard =& ClassRegistry::init('Dashboard');
	}

	function endTest() {
		unset($this->Dashboard);
		ClassRegistry::flush();
	}

}
?>