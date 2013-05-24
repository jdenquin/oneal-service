<?php
class Category extends AppModel {
	public $name = 'Category';
	public $belongsTo = 'Brand';
	public $hasMany = 'Product';

	public $validationDomain = 'validation_errors';

	public $validate = array(
			'name' => array(
				'length' => array(
						'rule' => array('between', 3, 50),
						'message' => 'Category Name have to be between %d and %d characters'
					))
		);

	public $actsAs = array(
			'Translate' => array(
					'name' => 'nameTranslate'
				)
		);
}