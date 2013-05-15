<?php
class Brand extends AppModel {
	public $name = 'Brand';
	public $hasMany = 'Category';
}