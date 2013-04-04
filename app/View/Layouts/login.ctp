<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap','bootstrap-responsive','styles','toastr','fullcalendar'));
                echo '<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic">';
                
                echo $this->fetch('meta');
		echo $this->fetch('css');
                
                echo '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>';
                echo '<script src="http://d3js.org/d3.v3.min.js"></script>';
                
                echo $this->Html->script('bootstrap');
                echo $this->Html->script('jquery.knob');
                echo $this->Html->script('jquery.sparkline.min');
                echo $this->Html->script('toastr');
                echo $this->Html->script('jquery.tablesorter.min');
                echo $this->Html->script('jquery.peity.min');
                echo $this->Html->script('fullcalendar.min');
                echo $this->Html->script('gcal');
                echo $this->Html->script('setup');
                
		echo $this->fetch('script');
	?>
</head>
<body>
		<div id="in-nav">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <ul class="pull-right">
                                    <li><a href="#">Link1</a></li>
                                    <li><a href="#">Link2</a></li>
                                    <li><a href="#">Link3</a></li>
                                    <li><a href="/login">Login</a></li>
                                </ul><a id="logo" href="/"><h4>Ibadge</h4></a>
                            </div>
                        </div>
                    </div>
		</div>

            <div class="container">
                <div class="row">
			<?php echo $this->Session->flash(); ?>
TEST
			<?php // Spans toevoegen per view
                        echo $this->fetch('content'); ?>
                </div>
            </div>
    <footer>
        <div class="container">
            <div class ="row">
                <div class="span12">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
                    
                </div>
            </div>
            <div class="row">
                 <?php echo $this->element('sql_dump'); ?>
                <?php echo $this->Js->writeBuffer(); ?>
                <?php print Configure::version(); ?>
            </div>
        </div>
    </footer>
</body>
<?php echo $this->Html->script('d3-setup');?>
<script>protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://'; address = protocol + window.location.host + window.location.pathname + '/ws'; socket = new WebSocket(address);
socket.onmessage = function(msg) { msg.data == 'reload' && window.location.reload() }</script>
</html>
