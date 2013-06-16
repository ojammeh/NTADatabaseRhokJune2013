<?php
App::uses('Attachmentlocation', 'Model');

/**
 * Attachmentlocation Test Case
 *
 */
class AttachmentlocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attachmentlocation',
		'app.studentattachment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Attachmentlocation = ClassRegistry::init('Attachmentlocation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Attachmentlocation);

		parent::tearDown();
	}

}
