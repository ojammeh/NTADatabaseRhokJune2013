<?php
/**
 * FinancialdataFixture
 *
 */
class FinancialdataFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'institution_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'centralgovtrevenue' => array('type' => 'float', 'null' => false, 'default' => null),
		'localgovtrevenue' => array('type' => 'float', 'null' => false, 'default' => null),
		'developmentpartnersrevenue' => array('type' => 'float', 'null' => false, 'default' => null),
		'owngeneratedrevenue' => array('type' => 'float', 'null' => false, 'default' => null),
		'outstandingarrears' => array('type' => 'float', 'null' => false, 'default' => null),
		'staffcost' => array('type' => 'float', 'null' => false, 'default' => null),
		'administrationexpenses' => array('type' => 'float', 'null' => false, 'default' => null),
		'other' => array('type' => 'float', 'null' => false, 'default' => null),
		'yearquarter' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => 1,
			'institution_id' => 1,
			'centralgovtrevenue' => 1,
			'localgovtrevenue' => 1,
			'developmentpartnersrevenue' => 1,
			'owngeneratedrevenue' => 1,
			'outstandingarrears' => 1,
			'staffcost' => 1,
			'administrationexpenses' => 1,
			'other' => 1,
			'yearquarter' => 'Lorem ipsum dolor sit amet'
		),
	);

}
