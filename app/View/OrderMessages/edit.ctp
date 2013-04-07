<div class="orderMessages form">
<?php echo $this->Form->create('OrderMessage'); ?>
	<fieldset>
		<legend><?php echo __('Edit Order Message'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('order_id');
		echo $this->Form->input('body');
		echo $this->Form->input('title');
		echo $this->Form->input('reciever');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrderMessage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OrderMessage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Order Messages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
