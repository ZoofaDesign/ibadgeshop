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

		<?php echo "Bestelling ".$order['Order']['id'];?>
                   <img src="<?php echo '/files/design/image/'.$order['Design'][0]['dir'].'/'.$order['Design'][0]['image']; ?>" />
                    <br>
                        Prijs: <?php echo $order['Order']['price']; ?>
                        <br>
                        Formaat: <?php echo $order['Design'][0]['format']; ?>
                        <br>
                        Breedte: <?php echo $order['Design'][0]['breedte']; ?>
                        <br>
                        Hoogte: <?php echo $order['Design'][0]['hoogte']; ?>
                <address>
  <strong><?php echo h($order['Customer']['naam']); ?></strong><br>
  <?php echo h($order['Customer']['groepsnaam']); ?><br>
  <?php echo h($order['Customer']['straat']); ?>, <?php echo h($order['Customer']['nr']); ?> <?php echo h($order['Customer']['bus']); ?><br>
  <?php echo h($order['Customer']['postcode']); ?> <?php echo h($order['Customer']['gemeente']); ?><br>
  <?php echo h($order['Customer']['land']); ?><br>
  <abbr title="Telefoon">T:</abbr> <?php echo h($order['Customer']['telefoon']); ?><br>
  <?php echo h($order['Customer']['e-mail']); ?><br>
  <?php if($order['Customer']['btw_nr']!==''){
      echo h($order['Customer']['btw_nr']);
  }?>
</address>
<?php echo $this->Html->link("Bestelling ".$order['Order']['id'], array('controller' => 'orders', 'action' => 'view', $order['Order']['id'])); ?>

</div>

