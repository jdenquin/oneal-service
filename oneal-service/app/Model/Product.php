<?php
class Product extends AppModel {
	public $name = 'Product';
	public $belongsTo = 'Category';
	public $hasAndBelongsToMany = array(
			'Piece' => array(
				'className' 			=> 'Piece',
				'joinTable'				=> 'pieces_products',
				'foreign_key'			=> 'product_id',
				'associationForeignKey' => 'piece_id',
				'unique' 				=> true
			)
	);
}