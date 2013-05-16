<?php
class UsersController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
	}
		
	public function admin_login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash('Login or Password doesn\'t match');
			}
		}
	}
	
	public function admin_logout() {
		$this->redirect($this->Auth->logout());
	}
	
	public function admin_home() {
		// on teste si l'utilisateur est connecte
		if ($this->Session->read('Auth.User') == null) {
			$this->Session->setFlash('You are not connected');
			$this->redirect('/admin');
		}
	}
}