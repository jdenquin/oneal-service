<?php
App::uses('AppController', 'Controller');

class HomeController extends AppController {

	public $name = 'Home';
	public $uses = array();
	
	public function preindex() {
		//define the language layout
		$this->layout = 'languages';
		
		if($this->session['User.language'] != null) {
			$this->redirect(array('language' => $this->session['User.language'], 'controller' => 'Home', 'action' => 'index'));
		} else {
			$this->set('languages', Configure::read('Config.languages'));
		}
	}

	public function index() {
		$this->loadModel('Category');
		$this->set('categories_stats', $this->Category->find('all', array('conditions' => array ('brand_id' => '1'))));
		$this->set('categories_oneal', $this->Category->find('all', array('conditions' => array ('brand_id' => '2'))));
	}
}
