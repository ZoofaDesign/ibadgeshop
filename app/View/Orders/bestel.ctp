<div class="span12 center">
<form name="bestel" action="orders/bestel" method="post" class="form">
                        <input type="file" name="datafile" size="40">
                        <?php echo $this->Form->input('Order.', array(
    'between' => '<br />',
    'type' => 'file'
)); ?>
                        <div id="preview"></div>
                        <?php 
                        $options = array('rond' => 'Rond', 'rechthoek' => 'Rechthoek','anders' => 'Anders');
                        $attributes = array('legend' => false);
                        echo $this->Form->radio('Order.format', $options, $attributes);
                        ?>
                        <?php echo $this->Form->input('Order.aantal',array('placeholder' => 'Aantal..')); ?>

                         <?php echo $this->Form->input('Order.hoogte',array('label' => 'Hoogte','placeholder' => 'Hoogte')); ?>
                         <?php echo $this->Form->input('Order.breedte',array('label' => 'Breedte','placeholder' => 'Breedte')); ?>
                         <?php echo $this->Form->input('Order.diameter',array('label' => 'Diameter','placeholder' => 'Diameter')); ?>

                        <?php echo $this->Form->input('Customer.naam',array('placeholder' => 'Naam & Voornaam')); ?>
                        <?php echo $this->Form->input('Customer.groepsnaam',array('placeholder' => 'Bedrijfs- of groepsnaam..')); ?>
                        <?php echo $this->Form->input('Customer.straat',array('placeholder' => 'Straat..','label' => 'Straat, nr, bus')); ?>
                        <?php echo $this->Form->input('Customer.nr', array('label' => '','class' => 'span2')); ?>
                        <?php echo $this->Form->input('Customer.bus', array('label' => '','class' => 'span1')); ?>
                        <?php echo $this->Form->input('Customer.postcode',array('placeholder' => 'Postcode..')); ?>
                        <?php echo $this->Form->input('Customer.telefoon',array('placeholder' => 'Telefoon')); ?>
                        <?php echo $this->Form->input('Customer.e-mail',array('placeholder' => 'Email')); ?>
                        <label>Land</label>
                        <?php 
                        $options = array('BE' => 'België', 'NL' => 'Nederland');
                        echo $this->Form->select('Customer.land', $options, array('escape' => false));
                        ?>
                        <?php echo $this->Form->input('Customer.btw_nr',array('label' => 'BTW-nr. (indien van toepassing)','placeholder' => 'Btw-nr...')); ?>
                        <label class="checkbox">
                            <input type="checkbox" value="voorwaarden" required>
                            <a href="#">Voorwaarden</a>
                        </label>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Bestellen</button>
                            <button type="button" class="btn">Cancel</button>
                        </div>

                    </form>
</div>
