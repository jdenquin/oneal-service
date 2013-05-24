<?php
App::uses('AppController', 'Controller');

class HomeController extends AppController {

	public $name = 'Home';
	public $uses = array();
	
	public function preindex() {
		//define the language layout
		$this->layout = 'languages';
		
		if($this->session['Config.language'] != null) {
			$this->redirect(array('language' => $this->session['Config.language'], 'controller' => 'Home', 'action' => 'index'));
		} else {
			$this->set('languages', Configure::read('Config.languages'));
		}
	}

	public function index() {
		$this->redirect(array('language' => $this->params['language'], 'controller' => 'categories', 'action' => 'view'));
	}
}
