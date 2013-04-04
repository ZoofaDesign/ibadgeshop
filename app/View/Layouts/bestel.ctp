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

$defaultTitle = __d('ibadge_title', 'Ibadge - D&eacute; nummer 1 in geborduurde badges voor clubs, verenigingen en bedrijven!');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $defaultTitle ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap','bootstrap-responsive','bestel.css'));
                
                echo $this->fetch('meta');
		echo $this->fetch('css');
                
                echo '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>';
                
                echo $this->Html->script('bootstrap');
                
		echo $this->fetch('script');
	?>
</head>
<body>
    <div class="page">
        <div class="page-container">
            <div class="container">
                <div class="row">
			<?php echo $this->Session->flash(); ?>

			<?php // Spans toevoegen per view
                        echo $this->fetch('content'); ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class ="row">
                <div class="span12">

                    
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
