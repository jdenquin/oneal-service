<?php
class UsersController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
	}
		
	public function admin_login() {
		$this->layout = 'admin_login';
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->write('Config.language', 'eng');
				Configure::write('Config.language', 'eng');
				$this->redirect($this->Auth->redirect(array('admin' => true, 'controller' => 'users', 'action' => 'home')));
			} else {
				$this->Session->setFlash('Login or Password doesn\'t match');
			}
		}
	}
	
	public function admin_logout() {
		$this->Session->destroy();
		$this->redirect($this->Auth->logout());
	}
	
	public function admin_home() {
		// on teste si l'utilisateur est connecte
		if ($this->Session->read('Auth.User') == null) {
			$this->Session->setFlash('You are not connected');
			$this->redirect('/admin');
		}
	}

	public function admin_view() {
		$this->set('users', $this->User->find('all'));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('User has been added');
				$this->redirect(array('admin' => true, 'controller' => 'users', 'action' => 'view'));
			} else {
				$this->Session->setFlash('Error while adding this user');
			}
		}
	}

	public function admin_edit($id = null) {
		$this->User->id = $id;
		if($this->request->is('get')) {
			$this->request->data = $this->User->read();
		} else {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('User has been updated');
				$this->redirect(array('admin' => true, 'controller' => 'users', 'action' => 'view'));
			} else {
				$this->Session->setFlash('System was unable to update user');
			}
		}
	}

	public function admin_delete($id = null) {
		if ($this->User->delete($id)) {
			$this->Session->setFlash('User with id : ' . $id . ' has been deleted');
			$this->redirect(array('admin' => true, 'controller' => 'users', 'action' => 'view'));
		}
	}
}