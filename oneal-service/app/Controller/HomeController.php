<?php
App::uses('AppController', 'Controller');

class HomeController extends AppController {

	public $name = 'Home';
	public $uses = array();

	public function index() {
		$this->loadModel('Category');
		$this->set('categories_stats', $this->Category->find('all', array('conditions' => array ('brand_id' => '1'))));
		$this->set('categories_oneal', $this->Category->find('all', array('conditions' => array ('brand_id' => '2'))));
	}
}
