<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $components = array('DebugKit.Toolbar', 
			'Session', 
			'Auth' => array (
					'loginAction' => array(
						'controller'=> 'users',
						'action'	=> 'login',
					),
					'authError'	=> 'You can\'t access to this page',
			)
	);
	
	public function beforeFilter() {
		//gestion du prefix admin
		if (!isset($this->params['prefix']) || $this->params['prefix'] != 'admin') {
			$this->_setLanguage();
			$this->Auth->allow();
		} else {
			if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
				$this->layout = 'admin';
				$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'admin' => false);
				$this->Auth->loginRedirect = array('admin' => true, 'controller' => 'users', 'action' => 'home');
				$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login', 'admin' => false);
			}
		}
	}
	
	// fonction qui set le language
	private function _setLanguage() {
		if (Configure::read('Config.language') != $this->params['language']) {
			Configure::write('Config.language', $this->params['language']);
		}
		if(!$this->Session->read('Config.language')) {
			$this->Session->write('Config.language', $this->params['language']);
		}
	}
}
