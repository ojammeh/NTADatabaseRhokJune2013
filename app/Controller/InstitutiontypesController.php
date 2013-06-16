<?php
App::uses('AppController', 'Controller');
/**
 * Institutiontypes Controller
 *
 * @property Institutiontype $Institutiontype
 */
class InstitutiontypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Institutiontype->recursive = 0;
		$this->set('institutiontypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Institutiontype->id = $id;
		if (!$this->Institutiontype->exists()) {
			throw new NotFoundException(__('Invalid institutiontype'));
		}
		$this->set('institutiontype', $this->Institutiontype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Institutiontype->create();
			if ($this->Institutiontype->save($this->request->data)) {
				$this->Session->setFlash(__('The institutiontype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The institutiontype could not be saved. Please, try again.'));
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
		$this->Institutiontype->id = $id;
		if (!$this->Institutiontype->exists()) {
			throw new NotFoundException(__('Invalid institutiontype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Institutiontype->save($this->request->data)) {
				$this->Session->setFlash(__('The institutiontype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The institutiontype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Institutiontype->read(null, $id);
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
		$this->Institutiontype->id = $id;
		if (!$this->Institutiontype->exists()) {
			throw new NotFoundException(__('Invalid institutiontype'));
		}
		if ($this->Institutiontype->delete()) {
			$this->Session->setFlash(__('Institutiontype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Institutiontype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
