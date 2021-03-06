<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
		<legend><?php echo __('Add Student'); ?></legend>
	<?php
		echo $this->Form->input('studentcode', array('label' => 'Student Code'));
		echo $this->Form->input('firstname');
		echo $this->Form->input('middlename');
		echo $this->Form->input('lastname');
		echo $this->Form->input('gender');
		echo $this->Form->input('nationality');
		echo $this->Form->input('role');
		echo $this->Form->input('dateofbirth', array('label' => 'Date Of Birth'));
		echo $this->Form->input('address');
		echo $this->Form->input('status');
		echo $this->Form->input('hasgraduated', array('label' => 'Has Graudated'));
		echo $this->Form->input('major');
		echo $this->Form->input('email');
		echo $this->Form->input('primaryphonenumber', array('label' => 'Primary Phone Number'));
		echo $this->Form->input('secondaryphonenumber', array('label' => 'Secondary Phone Number'));
		echo $this->Form->input('fax');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentattachments'), array('controller' => 'studentattachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentattachment'), array('controller' => 'studentattachments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentcourseenrollments'), array('controller' => 'studentcourseenrollments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentcourseenrollment'), array('controller' => 'studentcourseenrollments', 'action' => 'add')); ?> </li>
	</ul>
</div>
