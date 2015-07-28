<div class="mutualfunds form">
<?php echo $this->Form->create('Mutualfund'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mutualfund'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('mftitle');
		echo $this->Form->input('mfsymbol');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mutualfund.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mutualfund.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mutualfunds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
