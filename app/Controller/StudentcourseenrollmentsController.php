<?php
App::uses('AppController', 'Controller');
/**
 * Studentcourseenrollments Controller
 *
 * @property Studentcourseenrollment $Studentcourseenrollment
 */
class StudentcourseenrollmentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Studentcourseenrollment->recursive = 0;
		$this->set('studentcourseenrollments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Studentcourseenrollment->id = $id;
		if (!$this->Studentcourseenrollment->exists()) {
			throw new NotFoundException(__('Invalid studentcourseenrollment'));
		}
		$this->set('studentcourseenrollment', $this->Studentcourseenrollment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Studentcourseenrollment->create();
			if ($this->Studentcourseenrollment->save($this->request->data)) {
				$this->Session->setFlash(__('The studentcourseenrollment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentcourseenrollment could not be saved. Please, try again.'));
			}
		}
		$students = $this->Studentcourseenrollment->Student->find('list');
		$courses = $this->Studentcourseenrollment->Course->find('list');
		$this->set(compact('students', 'courses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Studentcourseenrollment->id = $id;
		if (!$this->Studentcourseenrollment->exists()) {
			throw new NotFoundException(__('Invalid studentcourseenrollment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Studentcourseenrollment->save($this->request->data)) {
				$this->Session->setFlash(__('The studentcourseenrollment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentcourseenrollment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Studentcourseenrollment->read(null, $id);
		}
		$students = $this->Studentcourseenrollment->Student->find('list');
		$courses = $this->Studentcourseenrollment->Course->find('list');
		$this->set(compact('students', 'courses'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Studentcourseenrollment->id = $id;
		if (!$this->Studentcourseenrollment->exists()) {
			throw new NotFoundException(__('Invalid studentcourseenrollment'));
		}
		if ($this->Studentcourseenrollment->delete()) {
			$this->Session->setFlash(__('Studentcourseenrollment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Studentcourseenrollment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
