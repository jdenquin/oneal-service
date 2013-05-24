<?php foreach ($languages as $language => $lang) : ?>
	<p><?php echo $this->Html->link($lang, array('language' => $lang, 'controller' => 'Home', 'action' => 'index')); ?></p>
<?php  endforeach;?>