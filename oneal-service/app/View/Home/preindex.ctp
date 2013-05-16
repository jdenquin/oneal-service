<?php foreach ($languages as $language => $name) : ?>
	<p><?php echo $this->Html->link($name, array('language' => $language, 'controller' => 'Home')); ?></p>
<?php  endforeach;?>