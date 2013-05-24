<h1>Edit a Category</h1>
<?php
	echo $this->Form->create('Category', array('action', 'edit'));
	foreach (Configure::read('Config.languages') as $lang) :
		echo $this->Form->input('Category.name.'.$lang, array('label' => 'Name '.$lang));
	endforeach; 
	echo $this->Form->input('brand_id', array(
			'options' => $brands
		));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Update');
?>