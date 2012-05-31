<?php
/* Signupblock Fixture generated on: 2012-05-31 17:05:29 : 1338477929 */
class SignupblockFixture extends CakeTestFixture {
	var $name = 'Signupblock';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'logintext' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'logouttxt' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 100),
		'ortext' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'regtext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'welcometext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'logintext' => array('column' => array('logintext', 'logouttxt', 'ortext', 'regtext', 'welcometext', 'language_id', 'created'), 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'logintext' => 1,
			'logouttxt' => 1,
			'ortext' => 1,
			'regtext' => 'Lorem ipsum dolor sit amet',
			'welcometext' => 'Lorem ipsum dolor sit amet',
			'language_id' => 1,
			'created' => '2012-05-31 17:25:29',
			'updated' => '1338477929'
		),
	);
}
?>