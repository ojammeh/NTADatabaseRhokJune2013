<?php
App::uses('AppModel', 'Model');
/**
 * Studentcourseenrollment Model
 *
 * @property Student $Student
 * @property Course $Course
 */
class Studentcourseenrollment extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'student_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'course_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
