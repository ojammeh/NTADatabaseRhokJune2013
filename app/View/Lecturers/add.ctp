<div class="lecturers form">
<?php echo $this->Form->create('Lecturer'); ?>
	<fieldset>
		<legend><?php echo __('Add Lecturer'); ?></legend>
	<?php
		echo $this->Form->input('lecturercode');
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');

		echo $this->Form->input('primaryphonenumber');
		echo $this->Form->input('secondaryphonenumber');
		echo $this->Form->input('address');
		echo $this->Form->input('nationality');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lecturers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
