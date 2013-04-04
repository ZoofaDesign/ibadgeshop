<?php
/**
 * CustomerFixture
 *
 */
class CustomerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'order_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'naam' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'groepsnaam' => array('type' => 'string', 'null' => false, 'default' => 'null', 'length' => 80, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'straat' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nr' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bus' => array('type' => 'string', 'null' => false, 'default' => 'null', 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'postcode' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gemeente' => array('type' => 'integer', 'null' => false, 'default' => null),
		'land' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telefoon' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'e-mail' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'btw_nr' => array('type' => 'string', 'null' => false, 'default' => 'null', 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'klant_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'klant_id' => 1,
			'order_id' => 1,
			'user_id' => 1,
			'naam' => 'Lorem ipsum dolor sit amet',
			'groepsnaam' => 'Lorem ipsum dolor sit amet',
			'straat' => 'Lorem ipsum dolor sit amet',
			'nr' => 'Lorem ipsum dolor ',
			'bus' => 'Lor',
			'postcode' => 'Lor',
			'gemeente' => 1,
			'land' => 'Lor',
			'telefoon' => 'Lorem ipsum dolor ',
			'e-mail' => 'Lorem ipsum dolor sit amet',
			'btw_nr' => 'Lorem ipsum dolor '
		),
	);

}
