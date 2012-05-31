<?php
/* Dashboard Fixture generated on: 2012-05-31 17:05:06 : 1338477786 */
class DashboardFixture extends CakeTestFixture {
	var $name = 'Dashboard';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'headertext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'leftblocktitle' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'leftblockdescription' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'timeremainingtext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'daystext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hourstext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'minutestext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'secondstext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'orgrankingstext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'expandlisttext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'headertext' => array('column' => array('headertext', 'leftblocktitle', 'leftblockdescription', 'timeremainingtext', 'daystext', 'hourstext', 'minutestext', 'secondstext', 'orgrankingstext', 'expandlisttext', 'language_id', 'created'), 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'headertext' => 'Lorem ipsum dolor sit amet',
			'leftblocktitle' => 'Lorem ipsum dolor sit amet',
			'leftblockdescription' => 'Lorem ipsum dolor sit amet',
			'timeremainingtext' => 'Lorem ipsum dolor sit amet',
			'daystext' => 'Lorem ipsum dolor sit amet',
			'hourstext' => 'Lorem ipsum dolor sit amet',
			'minutestext' => 'Lorem ipsum dolor sit amet',
			'secondstext' => 'Lorem ipsum dolor sit amet',
			'orgrankingstext' => 'Lorem ipsum dolor sit amet',
			'expandlisttext' => 'Lorem ipsum dolor sit amet',
			'language_id' => 1,
			'created' => '2012-05-31 17:23:06',
			'updated' => '1338477786'
		),
	);
}
?>