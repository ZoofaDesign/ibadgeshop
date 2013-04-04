<div class="span3">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Verwijder deze bestelling'), array('action' => 'delete', $this->Form->value('Order.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Order.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Alle bestellingen'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nieuwe Bestelling'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Alle Klanten'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nieuwe Klant'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="span9">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Edit Order'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Customer.naam');
		echo $this->Form->input('status');
		echo $this->Form->input('price');
		echo $this->Form->input('format');
		echo $this->Form->input('sizes');
		echo $this->Form->input('finished');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
