<?php
App::uses('Institutiontype', 'Model');

/**
 * Institutiontype Test Case
 *
 */
class InstitutiontypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.institutiontype',
		'app.institution'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Institutiontype = ClassRegistry::init('Institutiontype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Institutiontype);

		parent::tearDown();
	}

}
