<?php
App::uses('LecturersController', 'Controller');

/**
 * LecturersController Test Case
 *
 */
class LecturersControllerTest extends ControllerTestCase {

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
		'app.studentattachment',
		'app.attachmentlocation',
		'app.studentcourseenrollment',
		'app.course'
	);

}
