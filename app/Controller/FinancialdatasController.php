<?php
App::uses('AppController', 'Controller');
/**
 * Financialdatas Controller
 *
 * @property Financialdata $Financialdata
 */
class FinancialdatasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Financialdata->recursive = 0;
		$this->set('financialdatas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Financialdata->id = $id;
		if (!$this->Financialdata->exists()) {
			throw new NotFoundException(__('Invalid financialdata'));
		}
		$this->set('financialdata', $this->Financialdata->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Financialdata->create();
			if ($this->Financialdata->save($this->request->data)) {
				$this->Session->setFlash(__('The financialdata has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financialdata could not be saved. Please, try again.'));
			}
		}
		$institutions = $this->Financialdata->Institution->find('list');
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
		$this->Financialdata->id = $id;
		if (!$this->Financialdata->exists()) {
			throw new NotFoundException(__('Invalid financialdata'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Financialdata->save($this->request->data)) {
				$this->Session->setFlash(__('The financialdata has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financialdata could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Financialdata->read(null, $id);
		}
		$institutions = $this->Financialdata->Institution->find('list');
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
		$this->Financialdata->id = $id;
		if (!$this->Financialdata->exists()) {
			throw new NotFoundException(__('Invalid financialdata'));
		}
		if ($this->Financialdata->delete()) {
			$this->Session->setFlash(__('Financialdata deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Financialdata was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
