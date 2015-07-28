<div class="mutualfunds view">
<h2><?php echo __('Mutualfund'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mutualfund['Mutualfund']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mutualfund['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $mutualfund['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mftitle'); ?></dt>
		<dd>
			<?php echo h($mutualfund['Mutualfund']['mftitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mfsymbol'); ?></dt>
		<dd>
			<?php echo h($mutualfund['Mutualfund']['mfsymbol']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mutualfund'), array('action' => 'edit', $mutualfund['Mutualfund']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mutualfund'), array('action' => 'delete', $mutualfund['Mutualfund']['id']), array(), __('Are you sure you want to delete # %s?', $mutualfund['Mutualfund']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mutualfunds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mutualfund'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
