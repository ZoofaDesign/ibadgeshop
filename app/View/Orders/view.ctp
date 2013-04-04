<div class="span3">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Bestelling aanpassen'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Verwijder Bestelling'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Alle bestellingen'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nieuwe Bestelling'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Alle Klanten'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nieuwe Klant'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="span9">
<h2><?php  echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Customer']['klant_id'], array('controller' => 'customer', 'action' => 'view', $order['Customer']['klant_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($order['Order']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($order['Order']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Format'); ?></dt>
		<dd>
			<?php echo h($order['Order']['format']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sizes'); ?></dt>
		<dd>
			<?php echo h($order['Order']['sizes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($order['Order']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Finished'); ?></dt>
		<dd>
			<?php echo h($order['Order']['finished']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

