<div class="mutualfunds form">
<?php echo $this->Form->create('Mutualfund'); ?>
	<fieldset>
		<legend><?php echo __('Add Mutualfund'); ?></legend>
	<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('mftitle');
		echo $this->Form->input('mfsymbol');
		echo $this->Form->input('52WHigh');
		echo $this->Form->input('52WLow');
		echo $this->Form->input('tradevolume');
		echo $this->Form->input('High');
		echo $this->Form->input('Low');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mutualfunds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
