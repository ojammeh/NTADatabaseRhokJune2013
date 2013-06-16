<?php
App::uses('Studentcourseenrollment', 'Model');

/**
 * Studentcourseenrollment Test Case
 *
 */
class StudentcourseenrollmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.studentcourseenrollment',
		'app.student',
		'app.course',
		'app.lecturer',
		'app.institution',
		'app.institutiontype',
		'app.financialdata'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Studentcourseenrollment = ClassRegistry::init('Studentcourseenrollment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Studentcourseenrollment);

		parent::tearDown();
	}

}
