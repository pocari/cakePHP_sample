<?php
App::uses('AppController', 'Controller');
/**
 * Headers Controller
 *
 * @property Header $Header
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HeadersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Header->recursive = 0;
		$this->Paginator->settings = [
			'limit' => 2
		];
		$this->set('headers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Header->exists($id)) {
			throw new NotFoundException(__('Invalid header'));
		}
		$options = array('conditions' => array('Header.' . $this->Header->primaryKey => $id));
		$this->set('header', $this->Header->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Header->create();
			if ($this->Header->save($this->request->data)) {
				$this->Session->setFlash(__('The header has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The header could not be saved. Please, try again.'));
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
		if (!$this->Header->exists($id)) {
			throw new NotFoundException(__('Invalid header'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Header->save($this->request->data)) {
				$this->Session->setFlash(__('The header has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The header could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Header.' . $this->Header->primaryKey => $id));
			$this->request->data = $this->Header->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Header->id = $id;
		if (!$this->Header->exists()) {
			throw new NotFoundException(__('Invalid header'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Header->delete()) {
			$this->Session->setFlash(__('The header has been deleted.'));
		} else {
			$this->Session->setFlash(__('The header could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
