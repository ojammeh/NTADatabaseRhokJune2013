<?php
App::uses('Lecturer', 'Model');

/**
 * Lecturer Test Case
 *
 */
class LecturerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lecturer',
		'app.institution',
		'app.institutiontype',
		'app.financialdata',
		'app.student',
		'app.course',
		'app.studentcourseenrollment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lecturer = ClassRegistry::init('Lecturer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lecturer);

		parent::tearDown();
	}

}
