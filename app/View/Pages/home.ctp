<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @package		  app.webroot.img
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<link rel="stylesheet" href="app/webroot/css/eagle.css" type="text/css">

<h2 align="left"><?php echo '<img src="app/webroot/img/eagle pic1.jpg" alt="EFS" width="300" height="200"/>'; ?></h2>

<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>

<h2 align='center' ><?php echo __d('intro', 'Eagle Financial Services'); ?></h2>
<h2 align='center' ><?php echo __d('intro', 'Your Midwest Financial Services Partner'); ?></h2>
<h3 align='center' ><?php echo __d('intro', 'Financial Advisor Portfolio Planner'); ?></h3>
</h3>
<!-- <p align='center'>
<?php
// echo __d('cake_dev', 'To change the content of this page, edit: %s.<br />
// To change its layout, edit: %s.<br />
// You can also add some CSS styles for your pages at: %s.',
// 	'APP/View/Pages/home.ctp', 'APP/View/Layouts/default.ctp', 'APP/webroot/css');
?>
</p> -->

<p align='center'>
	<a href="http://localhost:8080/eagle/customers">Customers</a>
</p>
<p align='center'>
	<a href="http://localhost:8080/eagle/investments">Investments</a>
</p>
<p align='center'>
	<a href="http://localhost:8080/eagle/mutualfunds">Mutual Funds</a>
</p>
<p align='center'>
	<a href="http://localhost:8080/eagle/Stocks">Stocks</a>
</p>
