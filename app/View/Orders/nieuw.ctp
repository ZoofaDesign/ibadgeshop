<div class="span12">
    <h3>Nieuwe Bestellingen</h3>
    <table class="table table-striped">
    <?php foreach ($orders as $order): ?>
	<?php //print_r($order);  ?>
        <tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['Customer']['naam'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['klant_id'])); ?>
		</td>
		<td><?php echo h($order['Order']['status']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['price']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['format']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['sizes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
    </table>
</div>