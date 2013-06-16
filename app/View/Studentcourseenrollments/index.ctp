<div class="studentcourseenrollments index">
	<h2><?php echo __('Studentcourseenrollments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($studentcourseenrollments as $studentcourseenrollment): ?>
	<tr>
		<td><?php echo h($studentcourseenrollment['Studentcourseenrollment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($studentcourseenrollment['Student']['firstname'], array('controller' => 'students', 'action' => 'view', $studentcourseenrollment['Student']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($studentcourseenrollment['Course']['name'], array('controller' => 'courses', 'action' => 'view', $studentcourseenrollment['Course']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentcourseenrollment['Studentcourseenrollment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentcourseenrollment['Studentcourseenrollment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentcourseenrollment['Studentcourseenrollment']['id']), null, __('Are you sure you want to delete # %s?', $studentcourseenrollment['Studentcourseenrollment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Studentcourseenrollment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
