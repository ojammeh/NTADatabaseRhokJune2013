<?php
App::uses('AppController', 'Controller');
/**
 * Lecturers Controller
 *
 * @property Lecturer $Lecturer
 */
class LecturersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index($id = null) {
		$this->paginate = array(
			'conditions' => array('Lecturer.institution_id' => $this->getInstitutionId($id)),
		);
		$this->Lecturer->recursive = 0;
		$this->set('lecturers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Lecturer->id = $id;
		if (!$this->Lecturer->exists()) {
			throw new NotFoundException(__('Invalid lecturer'));
		}
		$this->set('lecturer', $this->Lecturer->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lecturer->create();
			$this->request->data['Lecturer']['institution_id'] = $this->getInstitutionId();
			if ($this->Lecturer->save($this->request->data)) {
				$this->Session->setFlash(__('The lecturer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lecturer could not be saved. Please, try again.'));
			}
		}
		$institutions = $this->Lecturer->Institution->find('list');
		$this->set(compact('institutions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Lecturer->id = $id;
		if (!$this->Lecturer->exists()) {
			throw new NotFoundException(__('Invalid lecturer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Lecturer']['institution_id'] = $this->getInstitutionId();
			if ($this->Lecturer->save($this->request->data)) {
				$this->Session->setFlash(__('The lecturer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lecturer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Lecturer->read(null, $id);
		}
		$institutions = $this->Lecturer->Institution->find('list');
		$this->set(compact('institutions'));
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
		$this->Lecturer->id = $id;
		if (!$this->Lecturer->exists()) {
			throw new NotFoundException(__('Invalid lecturer'));
		}
		if ($this->Lecturer->delete()) {
			$this->Session->setFlash(__('Lecturer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lecturer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
