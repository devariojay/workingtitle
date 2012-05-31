<?php
/* Vote Fixture generated on: 2012-05-31 17:05:26 : 1338477986 */
class VoteFixture extends CakeTestFixture {
	var $name = 'Vote';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'organization_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'ip' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'browser' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'organization_id' => 1,
			'language_id' => 1,
			'ip' => 1,
			'browser' => 1,
			'created' => '2012-05-31 17:26:26',
			'updated' => '1338477986'
		),
	);
}
?>