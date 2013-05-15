<?php
class CategoriesController extends AppController {
	public $name = 'Categories';
	
	public function index($id = null) {
		$this->loadModel('Product');
		$this->set('products', $this->Product->find('all', array('conditions' => array('category_id' => $id))));
	}
}