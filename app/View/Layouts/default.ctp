<?php
/**
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
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Uso Conforme</title>
  	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style.css' , 'bootstrap.min.css' , 'bootstrap-theme.min.css'));
		echo $this->Html->script(array('bootstrap.min' , 'jquery.min' ));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php if (isset($current_user)):?>
<?php echo $this->element('menu'); ?>
<?php endif;  ?>



<section>
	<div class=" row text-center container-fluid center-block">
		<div class="col-sm-12 ">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
			
		</div>
		  
	</div>
</section>


</body>
</html>