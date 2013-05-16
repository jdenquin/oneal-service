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
			$this->Auth->allow();
		} else {
			if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
				$this->layout = 'admin';
				$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'admin' => false);
				$this->Auth->loginRedirect = array('admin' => true, 'controller' => 'users', 'action' => 'home');
				$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login', 'admin' => false);
			}
		}
		
		$this->_setLanguage();
	}
	
	// fonction qui set le language
	private function _setLanguage() {
		//si le language n'est pas inclus dans la session
		if ($this->Session->read('Config.language') == null && isset($this->params['language'])) {
			//on indique le language dans la session
			$this->Session->write('Config.language', $this->params['language']);
			Configure::write('Config.language', $this->params['language']);
		}
		
		//si le language demande en url est different de celui de la session
		if(($this->Session->read('Config.language') != $this->params['language']) && isset($this->params['language'])) {
			//on recupere la liste des languages
			$languages = Configure::read('Config.languages');
			//on rempli le tableau languageV contenant l'indicateur des language (ex: fra)
			foreach ($languages as $language => $v)
				$languageV[] = $language;
			// on verifie si le language demandé est supporté par l'application
			if (in_array($this->params['language'], $languageV)) {
				$this->Session->write('Config.language', $this->params['language']);
			// sinon redirection au choix des langues
			} else {
				$this->redirect('/');
			}
		}
	}
}
