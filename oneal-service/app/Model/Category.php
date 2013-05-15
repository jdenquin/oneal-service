<?php
class Category extends AppModel {
	public $name = 'Categorie';
	public $belongsTo = 'Brand';
	public $hasMany = 'Product';
}