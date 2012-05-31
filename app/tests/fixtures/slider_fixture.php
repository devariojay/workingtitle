<?php
/* Slider Fixture generated on: 2012-05-31 17:05:39 : 1338477939 */
class SliderFixture extends CakeTestFixture {
	var $name = 'Slider';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'image' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'slidetitletext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'slidedescriptiontext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 500, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'slidelinktext' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'slidelink' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 250, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'order' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'image' => array('column' => 'image', 'unique' => 0), 'slidetitletext' => array('column' => 'slidetitletext', 'unique' => 0), 'slidedescriptiontext' => array('column' => 'slidedescriptiontext', 'unique' => 0), 'slidelinktext' => array('column' => 'slidelinktext', 'unique' => 0), 'slidelink' => array('column' => 'slidelink', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'image' => 'Lorem ipsum dolor sit amet',
			'slidetitletext' => 'Lorem ipsum dolor sit amet',
			'slidedescriptiontext' => 'Lorem ipsum dolor sit amet',
			'slidelinktext' => 'Lorem ipsum dolor sit amet',
			'slidelink' => 'Lorem ipsum dolor sit amet',
			'order' => 1,
			'language_id' => 1,
			'created' => '2012-05-31 17:25:39',
			'updated' => '1338477939'
		),
	);
}
?>