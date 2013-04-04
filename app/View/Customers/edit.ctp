<div class="span3">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Customer.klant_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Customer.klant_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="span9">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Customer'); ?></legend>
	<?php
		echo $this->Form->input('klant_id');
		echo $this->Form->input('order_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('naam');
		echo $this->Form->input('groepsnaam');
		echo $this->Form->input('straat');
		echo $this->Form->input('nr');
		echo $this->Form->input('bus');
		echo $this->Form->input('postcode');
		echo $this->Form->input('gemeente');
		echo $this->Form->input('land');
		echo $this->Form->input('telefoon');
		echo $this->Form->input('e-mail');
		echo $this->Form->input('btw_nr');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>