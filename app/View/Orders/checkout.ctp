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
<h2><?php  echo __('Bestelling'); ?></h2>

		<?php echo $this->Html->link("Bestelling ".$customer['Order']['id'], array('controller' => 'orders', 'action' => 'view', $customer['Order']['id'])); ?>
                    <br>
                        Prijs: <?php echo $customer['Order']['price']; ?>
                        
                <address>
  <strong><?php echo h($customer['Customer']['naam']); ?></strong><br>
  <?php echo h($customer['Customer']['groepsnaam']); ?><br>
  <?php echo h($customer['Customer']['straat']); ?>, <?php echo h($customer['Customer']['nr']); ?> <?php echo h($customer['Customer']['bus']); ?><br>
  <?php echo h($customer['Customer']['postcode']); ?> <?php echo h($customer['Customer']['gemeente']); ?><br>
  <?php echo h($customer['Customer']['land']); ?><br>
  <abbr title="Telefoon">T:</abbr> <?php echo h($customer['Customer']['telefoon']); ?><br>
  <?php echo h($customer['Customer']['e-mail']); ?><br>
  <?php if($order['Customer']['btw_nr']!==''){
      echo h($order['Customer']['btw_nr']);
  }?>
</address>

</div>

