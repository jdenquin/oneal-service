<?php
class CategoriesController extends AppController {
	public $name = 'Categories';
	
	public function index() {
		$this->set('categories', $this->Category->find('all'));
	}

	public function admin_view() {
		$this->set('categories', $this->Category->find('all'));
	}

	public function admin_add() {
		$this->loadModel('Brand');
		$this->set('brands', $this->Brand->find('list', array('fields', array('id', 'name'))));
		if ($this->request->is('post')) {
			$this->Category->locale = Configure::read('Config.languages');
			if ($this->Category->saveAssociated($this->request->data)) {
				$this->Session->setFlash('Category has been added');
				$this->redirect(array('action' => 'view'));
			}
		}
	}

	public function admin_edit($id = null) {
		$this->loadModel('Brand');
		$this->set('brands', $this->Brand->find('list', array('fields', array('id', 'name'))));
		$this->Category->id = $id;
		if ($this->Category->id != null) {
			$this->data = $this->Category->readAll();
		}
	}

	public function admin_delete($id = null) {
		if ($this->Category->delete($id)) {
			$this->Session->setFlash('User with id : ' . $id . ' has been deleted');
			$this->redirect(array('admin' => true, 'controller' => 'categories', 'action' => 'view'));
		}
	}
}