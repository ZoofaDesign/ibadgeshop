<div class="orderMessages index">
	<h2><?php echo __('Order Messages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('reciever'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($orderMessages as $orderMessage): ?>
	<tr>
		<td><?php echo h($orderMessage['OrderMessage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($orderMessage['Order']['id'], array('controller' => 'orders', 'action' => 'view', $orderMessage['Order']['id'])); ?>
		</td>
		<td><?php echo h($orderMessage['OrderMessage']['body']); ?>&nbsp;</td>
		<td><?php echo h($orderMessage['OrderMessage']['created']); ?>&nbsp;</td>
		<td><?php echo h($orderMessage['OrderMessage']['modified']); ?>&nbsp;</td>
		<td><?php echo h($orderMessage['OrderMessage']['title']); ?>&nbsp;</td>
		<td><?php echo h($orderMessage['OrderMessage']['reciever']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $orderMessage['OrderMessage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $orderMessage['OrderMessage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $orderMessage['OrderMessage']['id']), null, __('Are you sure you want to delete # %s?', $orderMessage['OrderMessage']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Order Message'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>