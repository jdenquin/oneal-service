<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

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
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<caption><?php echo $this->Html->link(__('Home', true), array('language' => Configure::read('Config.language'), 'controller' => 'Home', 'action' => 'index')); ?></caption>
			<caption><?php echo $this->Html->link(__('Abous Us', true), array('controller' => 'About', 'action' => 'index')); ?></caption>
			<caption><?php echo $this->Html->link(__('Broken/Missing Piece', true), array('controller' => 'Categories', 'action' => 'index')); ?></caption>
			<caption><?php echo $this->Html->link(__('F.A.Q', true), array('controller' => 'Faq', 'action' => 'index')); ?></caption>
			<caption><?php echo $this->Html->link(__('Contact', true), array('controller' => 'Contact', 'action' => 'index'))?></caption>
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
