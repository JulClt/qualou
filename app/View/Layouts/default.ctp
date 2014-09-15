<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Qualou.com - Conseils et Formations en qualité
	</title>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('ie');
		echo $this->Html->css('print');
		echo $this->Html->css('screen');
		echo $this->Html->css('styles');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>	
</head>
<body>
	<div id="content">

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
	</div>

	<footer>
		<ul>
			<li><a href="#" data-toggle="modal" data-target="#contactModal">Contact</a></li>
			<li><a href="#">Mentions légales</a></li>
			<li>© 2014 Qualou</li>
		</ul>
	</footer>

	<?php echo $this->element('sql_dump'); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap.js'); ?>
</body>
</html>
