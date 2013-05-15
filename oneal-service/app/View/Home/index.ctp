<?php
if (!Configure::read('debug')):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>

<table>
	<tr>
		<th>Stats</th>
	</tr>
	<tr>
	<?php foreach ($categories_stats as $category) : ?>
		<td><?php echo $this->Html->link($category['Category']['name'], array('language' => Configure::read('Config.language'), 'controller' => 'Categories', 'action' => 'index', $category['Category']['id'])); ?></td>
	<?php endforeach; ?>
	</tr>
	<tr>
		<th>Oneal</th>
	</tr>
	<?php foreach ($categories_oneal as $category) : ?>
		<td><?php echo $this->Html->link($category['Category']['name'], array('language' => Configure::read('Config.language'), 'controller' => 'Categories', 'action' => 'index', $category['Category']['id'])); ?></td>
	<?php endforeach; ?>
</table>
	


