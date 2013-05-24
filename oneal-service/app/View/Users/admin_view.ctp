<?php echo $this->Html->link('Add User', array('admin' => true, 'controller' => 'users', 'action' => 'add')); ?>
<table>
	<tr>
		<th>&nbsp;</th>
		<th>Name</th>
		<th>Created</th>
		<th>&nbsp;</th>
	</tr>
<?php foreach ($users as $user) : ?>
	<tr>
		<td></td>
		<td><?php echo $this->Html->link($user['User']['username'], array('admin' => true, 'controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?></td>
		<td><?php echo $user['User']['created']; ?></td>
		<td><?php echo $this->Form->postLink(
				'Delete',
				array('admin' => true, 'controller' => 'users', 'action' => 'delete', $user['User']['id']),
				array('confirm' => 'Are you sure?'));
		?></td>
	</tr>
<?php endforeach; ?>
</table>