<?php
App::uses('Studentattachment', 'Model');

/**
 * Studentattachment Test Case
 *
 */
class StudentattachmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.studentattachment',
		'app.student',
		'app.attachmentlocation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Studentattachment = ClassRegistry::init('Studentattachment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Studentattachment);

		parent::tearDown();
	}

}
