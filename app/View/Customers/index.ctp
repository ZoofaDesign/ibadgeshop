<div class="span3">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="span9">
	<h2><?php echo __('Customers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('klant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('naam'); ?></th>
			<th><?php echo $this->Paginator->sort('groepsnaam'); ?></th>
			<th><?php echo $this->Paginator->sort('straat'); ?></th>
			<th><?php echo $this->Paginator->sort('nr'); ?></th>
			<th><?php echo $this->Paginator->sort('bus'); ?></th>
			<th><?php echo $this->Paginator->sort('postcode'); ?></th>
			<th><?php echo $this->Paginator->sort('gemeente'); ?></th>
			<th><?php echo $this->Paginator->sort('land'); ?></th>
			<th><?php echo $this->Paginator->sort('telefoon'); ?></th>
			<th><?php echo $this->Paginator->sort('e-mail'); ?></th>
			<th><?php echo $this->Paginator->sort('btw_nr'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customers as $customer): ?>
	<tr>
		<td><?php echo h($customer['Customer']['klant_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customer['Order']['id'], array('controller' => 'orders', 'action' => 'view', $customer['Order']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($customer['User']['id'], array('controller' => 'users', 'action' => 'view', $customer['User']['id'])); ?>
		</td>
		<td><?php echo h($customer['Customer']['naam']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['groepsnaam']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['straat']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['nr']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['bus']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['postcode']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['gemeente']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['land']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['telefoon']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['e-mail']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['btw_nr']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customer['Customer']['klant_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['klant_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['klant_id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['klant_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>