<div class="designs index">
	<h2><?php echo __('Designs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($designs as $design): ?>
	<tr>
		<td><?php echo h($design['Design']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($design['Order']['id'], array('controller' => 'orders', 'action' => 'view', $design['Order']['id'])); ?>
		</td>
		<td><?php echo h($design['Design']['url']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $design['Design']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $design['Design']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $design['Design']['id']), null, __('Are you sure you want to delete # %s?', $design['Design']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Design'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
