<?php
/**
 * Copyright 2010 - 2011, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2011, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="span6 offset2">
    <div class="login">
	<h2><?php echo __d('users', 'Login'); ?></h2>
	<fieldset>
		<?php
			echo $this->Form->create($model, array(
				'action' => 'login',
				'id' => 'LoginForm',
                            'class' => 'form-horizontal'));
			echo $this->Form->input('email', array(
				'label' => __d('users', 'Email')));
			echo $this->Form->input('password',  array(
				'label' => __d('users', 'Password')));

			echo '<p>' . __d('users', 'Remember Me') . $this->Form->checkbox('remember_me') . '</p>';
			echo '<p>' . $this->Html->link(__d('users', 'I forgot my password'), array('action' => 'reset_password')) . '</p>';

			echo $this->Form->hidden('User.return_to', array(
				'value' => $return_to));
			echo $this->Form->end(array('label' => __d('users', 'Submit'),'div' => array('class' => 'controls'),'class' => 'btn'));
		?>
	</fieldset>
    </div>
</div>
<?php //echo $this->element('Users.sidebar');?>