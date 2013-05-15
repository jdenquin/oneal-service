<?php debug($products); ?>
<table>
	<tr>
		<th>Products</th>
	</tr>
	<?php foreach($products as $product): ?>
		<tr>
			<td><?php echo $this->Html->link($product['Product']['name'], array('language' => Configure::read('Config.language'), 'controller' => 'Products', 'action' => 'index', $product['Product']['ref'])); ?></td>
		</tr>
	<?php endforeach;?>
</table>