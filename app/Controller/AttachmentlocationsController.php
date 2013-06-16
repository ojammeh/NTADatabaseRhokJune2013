<?php
App::uses('AppController', 'Controller');
/**
 * Attachmentlocations Controller
 *
 * @property Attachmentlocation $Attachmentlocation
 */
class AttachmentlocationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Attachmentlocation->recursive = 0;
		$this->set('attachmentlocations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Attachmentlocation->id = $id;
		if (!$this->Attachmentlocation->exists()) {
			throw new NotFoundException(__('Invalid attachmentlocation'));
		}
		$this->set('attachmentlocation', $this->Attachmentlocation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Attachmentlocation->create();
			if ($this->Attachmentlocation->save($this->request->data)) {
				$this->Session->setFlash(__('The attachmentlocation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attachmentlocation could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Attachmentlocation->id = $id;
		if (!$this->Attachmentlocation->exists()) {
			throw new NotFoundException(__('Invalid attachmentlocation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Attachmentlocation->save($this->request->data)) {
				$this->Session->setFlash(__('The attachmentlocation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attachmentlocation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Attachmentlocation->read(null, $id);
		}
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
		$this->Attachmentlocation->id = $id;
		if (!$this->Attachmentlocation->exists()) {
			throw new NotFoundException(__('Invalid attachmentlocation'));
		}
		if ($this->Attachmentlocation->delete()) {
			$this->Session->setFlash(__('Attachmentlocation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attachmentlocation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
