<!--<div class="row-fluid">
<div class="span12 center">
    <?php echo $this->Form->create('Order', array('url' => '/orders/bestel', 'method' => 'post', 'inputDefaults' => array(
        'div' => array('class' => 'control-group'),
        'label' => array('class' => 'control-label'),
        'between' => '<div class="controls">',
        'after' => '</div>',
        'class' => '')));
// Other inputs
echo $this->Form->input('Design.image', array('type' => 'file')); ?>
                        <div id="preview"></div>
                        <?php 
                        $options = array('rond' => 'Rond', 'rechthoek' => 'Rechthoek','anders' => 'Anders');
                        $attributes = array('legend' => false);
                        echo $this->Form->radio('Design.format', $options, $attributes);
                        ?>
                        <?php echo $this->Form->input('Order.aantal',array('placeholder' => 'Aantal..')); ?>

                         <?php echo $this->Form->input('Design.hoogte',array('label' => 'Hoogte','placeholder' => 'Hoogte')); ?>
                         <?php echo $this->Form->input('Design.breedte',array('label' => 'Breedte','placeholder' => 'Breedte')); ?>
                         <?php echo $this->Form->input('Design.diameter',array('label' => 'Diameter','placeholder' => 'Diameter')); ?>

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
                        <?php echo $this->Form->input('Customer.btw_nr',array('label' => 'BTW-nr. (indien van toepassing)','placeholder' => 'Btw-nr')); ?>
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
</div>-->
<div class="row-fluid">

                    <?php echo $this->Form->create('Order', array('url' => '/orders/bestel', 'method' => 'post', 'inputDefaults' => array(
        'div' => array('class' => 'control-group'),
        'label' => array('class' => 'control-label'),
        'between' => '<div class="controls">',
        'after' => '</div>',
        'class' => '')
                        ,'class' => 'form-horizontal span12')); ?>
			<div class="row-fluid">
		        <fieldset id="step1">
		        	<?php //Eigen ontwerp uploaden ?>
		        	<div class="progress progress-success progress-striped">
			        	<div class="bar" style="width: 12.5%"></div>
		        	</div>
		        	<h3>Stap 1: Upload eerst jouw eigen ontwerp</h3>
		        	<?php echo $this->Form->input('Design.image', array('type' => 'file')); ?>
		        </fieldset>
			</div>
			
			<div class="row-fluid">
			    <fieldset id="step2">
			    	<?php //Aantal kiezen ?>
			    	<div class="progress progress-success progress-striped">
			    		<div class="bar" style="width: 25%"></div>
			    	</div>
			    	<h3>Stap 2: Hoeveel badges wil je?</h3>
                                <?php echo $this->Form->input('Order.aantal',array('placeholder' => '100? 200? 1000?')); ?>
			    </fieldset>
			</div>    
			    
			<div class="row-fluid">
			    <fieldset id="step3">
			    	<?php //Vorm + Afmeting ?>
			    	<div class="progress progress-success progress-striped">
			    		<div class="bar" style="width: 37.5%"></div>
			    	</div>
			    	<h3>Stap 3: Welke vorm heeft jouw ontwerp?</h3>
			    	<label class="radio">
			    		<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
			    	  	Rechthoekig
			    	</label>
			    	<label class="radio">
			    		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			    	  	Rond
			    	</label>
			    	<label class="radio">
			    		<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
			    	  	Speciaal
			    	</label>
                                
                                <?php 
                                    $options = array('rond' => 'Rond', 'rechthoek' => 'Rechthoek','anders' => 'Anders');
                                    $attributes = array('legend' => false, 'label' => array('class' => 'radio'));
                                    echo $this->Form->radio('Design.format', $options, $attributes);
                                    ?>
			    </fieldset>
		   	</div>
		   	
			<div class="row-fluid">
			    <fieldset id="step4">
			    	<?php //Vorm + Afmeting ?>
			    	<div class="progress progress-success progress-striped">
			    		<div class="bar" style="width: 50%"></div>
			    	</div>
			    	<h3>Stap 4: Hoe groot moet jouw badge zijn?</h3>
			    	<h4>Jouw badge heeft een rechthoekige vorm</h4>
			    	<p>Hier komt een foto waarmee uitgelegd wordt hoe je hoogte en breedte opmeet</p>
			    	<?php echo $this->Form->input('Design.hoogte',array('placeholder' => 'Hoogte in cm')); ?>
                                <?php echo $this->Form->input('Design.breedte',array('placeholder' => 'Breedte in cm')); ?>
			    	
			    	<h4>Jouw badge is rond</h4>
			    	<p>Hier komt een foto waarmee uitgelegd wordt hoe je de diameter opmeet</p>
                                <?php echo $this->Form->input('Design.diameter',array('placeholder' => 'Diamater in cm')); ?>

			    	<h4>Jouw badge heeft een speciale vorm</h4>
			    	<p>Hier komt een foto waarmee uitgelegd wordt hoe je hoogte en breedte opmeet</p>
                                <?php echo $this->Form->input('Design.hoogte',array('placeholder' => 'Hoogte in cm')); ?>
                                <?php echo $this->Form->input('Design.breedte',array('placeholder' => 'Breedte in cm')); ?>

			    </fieldset>
			</div>
		    <div class="row-fluid"> 
			    <fieldset id="step5">
			    	<?php //Persoonlijke gegevens + bedrijfsgegevens ?>
			    	<h3>Stap 5: Waar moeten we leveren?</h3>
			    	<div class="progress progress-success progress-striped">
			    		<div class="bar" style="width: 62.5%"></div>
			    	</div>
                                
                                <?php echo $this->Form->input('Customer.naam',array('placeholder' => 'Naam & Voornaam')); ?>
                        <?php echo $this->Form->input('Customer.groepsnaam',array('placeholder' => 'Bedrijfs- of groepsnaam..')); ?>
                        <?php echo $this->Form->input('Customer.straat',array('placeholder' => 'Straat..','label' => 'Straat, nr, bus')); ?>
                        <?php echo $this->Form->input('Customer.nr', array('label' => '','class' => 'span2')); ?>
                        <?php echo $this->Form->input('Customer.bus', array('label' => '','class' => 'span1')); ?>
                        <?php echo $this->Form->input('Customer.postcode',array('placeholder' => 'Postcode', 'type' => 'text')); ?>
                        <?php echo $this->Form->input('Customer.telefoon',array('placeholder' => 'Telefoon')); ?>
                        <?php echo $this->Form->input('Customer.e-mail',array('placeholder' => 'Email')); ?>
                                
                                <?php 
                        $options = array('BE' => 'België', 'NL' => 'Nederland');
                        echo $this->Form->select('Customer.land', $options, array('escape' => false,'label' => 'Land'));
                        ?>
                        <?php echo $this->Form->input('Customer.btw_nr',array('label' => 'BTW-nr. (indien van toepassing)','placeholder' => 'Btw-nr')); ?>
			 	</fieldset>
			</div>
		 	<div class="row-fluid">		 	
			    <fieldset id="step6">
			    	<?php //Gegevens + bestelling controleren en bevestigen ?>
			    	<h3>Stap 6: Klopt alles?</h3>
			    	<div class="progress progress-success progress-striped">
			    		<div class="bar" style="width: 75%"></div>
			    	</div>
			    </fieldset>
			</div>	    
    		<div class="row-fluid">
			    <fieldset id="step7">
			   		<?php //Doorsturen naar betaling ?>
			    	<h3>Give me your money</h3>
			    	<div class="progress progress-success progress-striped">
			    		<div class="bar" style="width: 87.5%"></div>
			    	</div>
			    </fieldset>
			</div>
		</form>
	</div>
</div><!--/.row-fluid-->
