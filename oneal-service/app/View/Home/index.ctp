<?php $language = $this->Session->read('Config.language'); ?>
<table>
	<tr>
		<th>Stats</th>
	</tr>
	<tr>
	<?php foreach ($categories_stats as $category) : ?>
		<td><?php echo $this->Html->link($category['Category']['name'], array('language' => $language, 'controller' => 'Categories', 'action' => 'index', $category['Category']['id'])); ?></td>
	<?php endforeach; ?>
	</tr>
	<tr>
		<th>Oneal</th>
	</tr>
	<?php foreach ($categories_oneal as $category) : ?>
		<td><?php echo $this->Html->link($category['Category']['name'], array('language' => $language, 'controller' => 'Categories', 'action' => 'index', $category['Category']['id'])); ?></td>
	<?php endforeach; ?>
</table>
	


