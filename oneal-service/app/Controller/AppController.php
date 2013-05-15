<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $components = array('DebugKit.Toolbar');
	
	public function beforeFilter() {
		$this->_setLanguage();
	}
	
	private function _setLanguage() {
		if (isset($this->params['language'])) {
			Configure::write('Config.language', $this->params['language']);
			//$this->session->write('User.language', $this->params['language']);
		}
	}
}
