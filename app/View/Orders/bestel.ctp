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
                        echo $this->Form->radio('format', $options, $attributes);
                        ?>
                        <?php echo $this->Form->input('Order.',array('placeholder' => 'Aantal..')); ?>

                        <label>Hoogte</label>
                        <input name="hoogte" type="text" placeholder="Hoogte..">
                        <label>Breedte</label>
                        <input name="breedte" type="text" placeholder="Breedte..">
                        <label>Diameter</label>
                        <input name="diameter" type="text" placeholder="Diameter..">
                        <?php echo $this->Form->input('Order.Customer.naam',array('placeholder' => 'Naam & Voornaam')); ?>
                        <?php echo $this->Form->input('Order.Customer.groepsnaam',array('placeholder' => 'Bedrijfs- of groepsnaam..')); ?>
                        <?php echo $this->Form->input('Order.Customer.straat',array('placeholder' => 'Straat..','label' => 'Straat, nr, bus')); ?>
                        <?php echo $this->Form->input('Order.Customer.nr', array('label' => '','class' => 'span2')); ?>
                        <?php echo $this->Form->input('Order.Customer.bus', array('label' => '','class' => 'span1')); ?>
                        <?php echo $this->Form->input('Order.Customer.postcode',array('placeholder' => 'Postcode..')); ?>
                        <?php echo $this->Form->input('Order.Customer.tel',array('placeholder' => 'Telefoon')); ?>
                        <?php echo $this->Form->input('Order.Customer.email',array('placeholder' => 'Email')); ?>
                        <label>Land</label>
                        <?php 
                        $options = array('BE' => 'België', 'NL' => 'Nederland');
                        echo $this->Form->select('land', $options, array('escape' => false));
                        ?>
                        <?php echo $this->Form->input('Order.Customer.btw_nr',array('label' => 'BTW-nr. (indien van toepassing)','placeholder' => 'Btw-nr...')); ?>
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
