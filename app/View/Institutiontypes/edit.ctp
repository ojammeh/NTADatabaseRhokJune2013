<div class="institutiontypes form">
<?php echo $this->Form->create('Institutiontype'); ?>
	<fieldset>
		<legend><?php echo __('Edit Institutiontype'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Institutiontype.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Institutiontype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Institutiontypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
	</ul>
</div>
