<div class="customers view span12">
<h2><?php  echo __('Customer'); ?></h2>
<?php print_r($customer); ?>
	<dl>
		<dt><?php echo __('Klant Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['klant_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
                    <?php foreach ($customer['Order'] as $order): ?>
			<?php echo $this->Html->link("Bestelling ".$order['id'], array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
                    <br>
                        Prijs: <?php echo $order['price']; ?>
                        <br>
                    <?php echo "Printout van bestelling"; ?>
			&nbsp;
                    <?php endforeach; ?>
		</dd>
		<dt><?php echo __('Naam'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['naam']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Groepsnaam'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['groepsnaam']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Straat'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['straat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nr'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['nr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bus'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['bus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gemeente'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['gemeente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Land'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['land']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefoon'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['telefoon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E-mail'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['e-mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Btw Nr'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['btw_nr']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['klant_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['klant_id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['klant_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
