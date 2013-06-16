<div class="studentcourseenrollments view">
<h2><?php  echo __('Studentcourseenrollment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentcourseenrollment['Studentcourseenrollment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentcourseenrollment['Student']['firstname'], array('controller' => 'students', 'action' => 'view', $studentcourseenrollment['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentcourseenrollment['Course']['name'], array('controller' => 'courses', 'action' => 'view', $studentcourseenrollment['Course']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Studentcourseenrollment'), array('action' => 'edit', $studentcourseenrollment['Studentcourseenrollment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Studentcourseenrollment'), array('action' => 'delete', $studentcourseenrollment['Studentcourseenrollment']['id']), null, __('Are you sure you want to delete # %s?', $studentcourseenrollment['Studentcourseenrollment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentcourseenrollments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentcourseenrollment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
