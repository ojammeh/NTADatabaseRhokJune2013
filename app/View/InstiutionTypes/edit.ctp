<div class="instiutionTypes form">
<?php echo $this->Form->create('InstiutionType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Instiution Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InstiutionType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('InstiutionType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Instiution Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
	</ul>
</div>
