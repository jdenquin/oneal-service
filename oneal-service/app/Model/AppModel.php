<?php
App::uses('Model', 'Model');

class AppModel extends Model {

	//fonction permettant de mettre en forme le tableau retourner lors d'un read() afin d'avoir la bonne structure (name -> lang -> content)
	public function readAll() {
		$datas = $this->read();
		foreach ($datas as $field=>$trad) {
			if (strpos($field, 'Translate') != false) {
				$name = str_replace('Translate', '', $field);
				$datas[$this->name][$name] = array();
				foreach ($trad as $v) {
					$locale = $v['locale'];
					$datas[$this->name][$name][$locale] = $v['content'];
				}
			}
		}
		return $datas;
	}
}
