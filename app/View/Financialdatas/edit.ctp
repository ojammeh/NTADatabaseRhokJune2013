<div class="financialdatas form">
<?php echo $this->Form->create('Financialdata'); ?>
	<fieldset>
		<legend><?php echo __('Edit Financialdata'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('institution_id');
		echo $this->Form->input('centralgovtrevenue');
		echo $this->Form->input('localgovtrevenue');
		echo $this->Form->input('developmentpartnersrevenue');
		echo $this->Form->input('owngeneratedrevenue');
		echo $this->Form->input('outstandingarrears');
		echo $this->Form->input('staffcost');
		echo $this->Form->input('administrationexpenses');
		echo $this->Form->input('other');
		echo $this->Form->input('yearquarter');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Financialdata.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Financialdata.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Financialdatas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
	</ul>
</div>
