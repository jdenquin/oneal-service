<h1>Brands</h1>
<table>
	<tr>
		<th>Id</th>
		<th><?php echo __('Brand'); ?></th>
	</tr>
	
	<?php foreach ($brands as $brand): ?>
	<tr>
		<td><?php echo $brand['Brand']['id_brand']; ?></td>
		<td><?php echo $this->Html->link($brand['Brand']['name_brand'], array('controller' => 'brands', 'action' => 'view', $brand['Brand']['id_brand'])); ?>
	</tr>
	<?php endforeach; ?>
</table>