<?php echo $this->Html->link('Add Category', array('admin' => true, 'controller' => 'categories', 'action' => 'add')); ?>
<table>
	<tr>
		<th>&nbsp;</th>
		<th>Name</th>
		<th></th>
	</tr>
	<?php foreach ($categories as $category) : ?>
		<tr>
			<td></td>
			<td><?php echo $this->Html->link($category['Category']['name'], array('admin' => true, 'controller' => 'categories', 'action' => 'edit', $category['Category']['id'])); ?></td>
			<td><?php echo $this->Form->postLink(
					'Delete',
					array('action' => 'delete', $category['Category']['id']),
					array('confirm' => 'Are you sure?')); 
			?></td>
		</tr>
	<?php endforeach; ?>
</table>