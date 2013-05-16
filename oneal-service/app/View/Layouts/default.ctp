<?php

$siteDescription = __('Welcome on Our Website');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $siteDescription ?>:
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('style');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		$language = $this->Session->read('Config.language');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<caption><?php echo $this->Html->link(__('Home', true), array('language' => $language, 'controller' => 'Home', 'action' => 'index')); ?></caption>
			<caption><?php echo $this->Html->link(__('Abous Us', true), array('language' => $language, 'controller' => 'About', 'action' => 'index')); ?></caption>
			<caption><?php echo $this->Html->link(__('Broken/Missing Piece', true), array('language' => $language, 'controller' => 'Categories', 'action' => 'index')); ?></caption>
			<caption><?php echo $this->Html->link(__('F.A.Q', true), array('language' => $language, 'controller' => 'Faq', 'action' => 'index')); ?></caption>
			<caption><?php echo $this->Html->link(__('Contact', true), array('language' => $language, 'controller' => 'Contact', 'action' => 'index'))?></caption>
		</div>
		<div id="content">
		
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $siteDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
