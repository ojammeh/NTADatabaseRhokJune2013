<?php
App::uses('Financialdata', 'Model');

/**
 * Financialdata Test Case
 *
 */
class FinancialdataTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.financialdata',
		'app.institution',
		'app.institutiontype',
		'app.lecturer',
		'app.student'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Financialdata = ClassRegistry::init('Financialdata');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Financialdata);

		parent::tearDown();
	}

}
