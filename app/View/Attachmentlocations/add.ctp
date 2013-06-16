<div class="attachmentlocations form">
<?php echo $this->Form->create('Attachmentlocation'); ?>
	<fieldset>
		<legend><?php echo __('Add Attachmentlocation'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('region');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Attachmentlocations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Studentattachments'), array('controller' => 'studentattachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentattachment'), array('controller' => 'studentattachments', 'action' => 'add')); ?> </li>
	</ul>
</div>
