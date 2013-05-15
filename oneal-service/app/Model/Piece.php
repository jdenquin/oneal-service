<?php
class Piece extends AppModel {
	public $name = 'Piece';
	public $hasAndBelongsToMany = array(
			'Product' => array(
				'className' 			=> 'Product',
				'joinTable'				=> 'pieces_products',
				'foreign_key'			=> 'piece_id',
				'associationForeignKey' => 'product_id',
				'unique' 				=> true
			)
	);
}