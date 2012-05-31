<?php
/* Detail Fixture generated on: 2012-05-31 17:05:14 : 1338477794 */
class DetailFixture extends CakeTestFixture {
	var $name = 'Detail';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tagline' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'missionstatement' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'winningblurb' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'organization_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'tagline' => 1,
			'missionstatement' => 1,
			'winningblurb' => 1,
			'organization_id' => 1,
			'created' => '2012-05-31 17:23:14',
			'updated' => '1338477794',
			'language_id' => 1
		),
	);
}
?>