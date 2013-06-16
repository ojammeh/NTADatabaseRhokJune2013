<?php
App::uses('AppController', 'Controller');
/**
 * InstiutionTypes Controller
 *
 * @property InstiutionType $InstiutionType
 */
class InstiutionTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InstiutionType->recursive = 0;
		$this->set('instiutionTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->InstiutionType->id = $id;
		if (!$this->InstiutionType->exists()) {
			throw new NotFoundException(__('Invalid instiution type'));
		}
		$this->set('instiutionType', $this->InstiutionType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InstiutionType->create();
			if ($this->InstiutionType->save($this->request->data)) {
				$this->Session->setFlash(__('The instiution type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instiution type could not be saved. Please, try again.'));
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
		$this->InstiutionType->id = $id;
		if (!$this->InstiutionType->exists()) {
			throw new NotFoundException(__('Invalid instiution type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InstiutionType->save($this->request->data)) {
				$this->Session->setFlash(__('The instiution type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instiution type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->InstiutionType->read(null, $id);
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
		$this->InstiutionType->id = $id;
		if (!$this->InstiutionType->exists()) {
			throw new NotFoundException(__('Invalid instiution type'));
		}
		if ($this->InstiutionType->delete()) {
			$this->Session->setFlash(__('Instiution type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Instiution type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
