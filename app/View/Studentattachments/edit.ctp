<div class="studentattachments form">
<?php echo $this->Form->create('Studentattachment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Studentattachment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('student_id');
		echo $this->Form->input('attachmentlocation_id');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Studentattachment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Studentattachment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Studentattachments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attachmentlocations'), array('controller' => 'attachmentlocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attachmentlocation'), array('controller' => 'attachmentlocations', 'action' => 'add')); ?> </li>
	</ul>
</div>
