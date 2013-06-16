<?php
App::uses('AppController', 'Controller');
/**
 * Studentattachments Controller
 *
 * @property Studentattachment $Studentattachment
 */
class StudentattachmentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Studentattachment->recursive = 0;
		$this->set('studentattachments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Studentattachment->id = $id;
		if (!$this->Studentattachment->exists()) {
			throw new NotFoundException(__('Invalid studentattachment'));
		}
		$this->set('studentattachment', $this->Studentattachment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Studentattachment->create();
			if ($this->Studentattachment->save($this->request->data)) {
				$this->Session->setFlash(__('The studentattachment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentattachment could not be saved. Please, try again.'));
			}
		}
		$students = $this->Studentattachment->Student->find('list');
		$attachmentlocations = $this->Studentattachment->Attachmentlocation->find('list');
		$this->set(compact('students', 'attachmentlocations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Studentattachment->id = $id;
		if (!$this->Studentattachment->exists()) {
			throw new NotFoundException(__('Invalid studentattachment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Studentattachment->save($this->request->data)) {
				$this->Session->setFlash(__('The studentattachment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentattachment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Studentattachment->read(null, $id);
		}
		$students = $this->Studentattachment->Student->find('list');
		$attachmentlocations = $this->Studentattachment->Attachmentlocation->find('list');
		$this->set(compact('students', 'attachmentlocations'));
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
		$this->Studentattachment->id = $id;
		if (!$this->Studentattachment->exists()) {
			throw new NotFoundException(__('Invalid studentattachment'));
		}
		if ($this->Studentattachment->delete()) {
			$this->Session->setFlash(__('Studentattachment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Studentattachment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
