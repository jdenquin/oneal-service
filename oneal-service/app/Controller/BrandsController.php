<?php
class BrandsController extends AppController {
	public $helpers = array('Html', 'Form');
	
	public function index() {
		$this->set('brands', $this->Brand->find('all'));
	}
	
	public function view($id = null) {
		$this->Brand->id = $id;
		$this->set('brand', $this->Brand->read());
	}
}