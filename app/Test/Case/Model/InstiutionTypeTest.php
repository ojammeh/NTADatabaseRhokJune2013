<?php
App::uses('InstiutionType', 'Model');

/**
 * InstiutionType Test Case
 *
 */
class InstiutionTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.instiution_type',
		'app.institution'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InstiutionType = ClassRegistry::init('InstiutionType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InstiutionType);

		parent::tearDown();
	}

}
