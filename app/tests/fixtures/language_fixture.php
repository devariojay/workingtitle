<?php
/* Language Fixture generated on: 2012-05-31 17:05:54 : 1338477834 */
class LanguageFixture extends CakeTestFixture {
	var $name = 'Language';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'createdby' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'updatedby' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'createdby' => 1,
			'updatedby' => 1,
			'created' => '2012-05-31 17:23:54',
			'updated' => '1338477834'
		),
	);
}
?>