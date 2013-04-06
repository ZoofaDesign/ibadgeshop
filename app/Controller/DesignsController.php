<?php
App::uses('AppController', 'Controller');
/**
 * Designs Controller
 *
 * @property Design $Design
 */
class DesignsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Design->recursive = 0;
		$this->set('designs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Design->exists($id)) {
			throw new NotFoundException(__('Invalid design'));
		}
		$options = array('conditions' => array('Design.' . $this->Design->primaryKey => $id));
		$this->set('design', $this->Design->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Design->create();
			if ($this->Design->save($this->request->data)) {
				$this->Session->setFlash(__('The design has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The design could not be saved. Please, try again.'));
			}
		}
		$orders = $this->Design->Order->find('list');
		$this->set(compact('orders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Design->exists($id)) {
			throw new NotFoundException(__('Invalid design'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Design->save($this->request->data)) {
				$this->Session->setFlash(__('The design has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The design could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Design.' . $this->Design->primaryKey => $id));
			$this->request->data = $this->Design->find('first', $options);
		}
		$orders = $this->Design->Order->find('list');
		$this->set(compact('orders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Design->id = $id;
		if (!$this->Design->exists()) {
			throw new NotFoundException(__('Invalid design'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Design->delete()) {
			$this->Session->setFlash(__('Design deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Design was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
        
        // 1) AJAX pushes a file upload to /files/upload?name=file.jpg
 
// 2) FilesController::upload() handles the import by setting the file name for the image
public function upload() {
	$this->request->data['Upload']['image'] = $this->request->query['name'];
 
	if ($this->Upload->save($this->request->data)) {
		// File uploaded and record saved
	}
}
}
