<div class="orderMessages view">
<h2><?php  echo __('Order Message'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($orderMessage['OrderMessage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orderMessage['Order']['id'], array('controller' => 'orders', 'action' => 'view', $orderMessage['Order']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($orderMessage['OrderMessage']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($orderMessage['OrderMessage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($orderMessage['OrderMessage']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($orderMessage['OrderMessage']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reciever'); ?></dt>
		<dd>
			<?php echo h($orderMessage['OrderMessage']['reciever']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order Message'), array('action' => 'edit', $orderMessage['OrderMessage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order Message'), array('action' => 'delete', $orderMessage['OrderMessage']['id']), null, __('Are you sure you want to delete # %s?', $orderMessage['OrderMessage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Messages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Message'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
