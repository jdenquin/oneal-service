<?php
class ProductsController extends AppController {
	public $name = 'Products';
	
	public function index($ref = null) {
		$this->set('product', $this->Product->find('all', array('conditions' => array('ref' => $ref))));
	}
}