<div class="span4">
<h2><?php  echo __('Bestelling'); ?></h2>

		<?php echo "Bestelling ".$order['Order']['id'];?>
                <a href="#" class="thumbnail">
                    <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="<?php echo '/files/design/image/'.$order['Design'][0]['dir'].'/'.$order['Design'][0]['image']; ?>">
                </a>
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
                        <form method="POST" action="url of MPI" >
Please Click ‘Submit’ to pay your order.
<input type="hidden" name="Uid" value="1234567890">
<input type="hidden" name="Orderid" value="1122334455">
<input type="hidden" name="Amount" value="1500">
<input type="hidden" name="Description" value="your good" >
<input type="hidden" name="Hash" 
value="AEBA4E90E65740A3DC33C32179AC1B431F673BDF">
<input type="hidden" name="Beneficiary" value="Shopname">
<input type="hidden" name="Chname" value="Jesse James">
<input type="submit" name="submit">
</form>
<?php echo $this->Html->link("Betaal", array('controller' => 'orders', 'action' => 'betaal',$order['Order']['id']), array('class' => 'btn')); ?>

</div>

