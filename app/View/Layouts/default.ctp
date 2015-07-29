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
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<table id="headercontenttab">
		<tr><td><a href="http://localhost:8080/eagle/"><h1 align="center" ><label  for="homelabel">HOME</label></h1></a></td>
		<td><a href="http://localhost:8080/eagle/customers"><h1 align="center"><label for="customerlabel">CUSTOMERS</label></h1></a></td>
		<td><a href="http://localhost:8080/eagle/investments"><h1 align="center" ><label for="investmentslabel">INVESTMENT</label></h1></a></td>
		<td><a href="http://localhost:8080/eagle/mutualfunds"><h1 align="center"><label for="mutualfundsabel">MUTUAL FUNDS</label></h1></a></td>
		<td><a href="http://localhost:8080/eagle/stocks"><h1 align="center" ><label for="stockslabel">STOCKS</label></h1></a></td></tr>
		</table>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<label id="footerLabel">
				Contact Us,</br>
				929 S 70th Plaza</br>
				Unit #2</br>
				Omaha,</br>
				Nebraska- 68106 </label>
			<h3 align="right""><a href="https://github.com/saratchandra-a/eagle">Check out my GitHub repository</h3>
		</div>
	</div>
</body>
</html>
