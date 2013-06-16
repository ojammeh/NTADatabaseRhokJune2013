<div class="courses view">
<h2><?php  echo __('Course'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($course['Course']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lecturer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($course['Lecturer']['lecturercode'], array('controller' => 'lecturers', 'action' => 'view', $course['Lecturer']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lecturers'), array('controller' => 'lecturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lecturer'), array('controller' => 'lecturers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentcourseenrollments'), array('controller' => 'studentcourseenrollments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentcourseenrollment'), array('controller' => 'studentcourseenrollments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Studentcourseenrollments'); ?></h3>
	<?php if (!empty($course['Studentcourseenrollment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['Studentcourseenrollment'] as $studentcourseenrollment): ?>
		<tr>
			<td><?php echo $studentcourseenrollment['id']; ?></td>
			<td><?php echo $studentcourseenrollment['student_id']; ?></td>
			<td><?php echo $studentcourseenrollment['course_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'studentcourseenrollments', 'action' => 'view', $studentcourseenrollment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'studentcourseenrollments', 'action' => 'edit', $studentcourseenrollment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'studentcourseenrollments', 'action' => 'delete', $studentcourseenrollment['id']), null, __('Are you sure you want to delete # %s?', $studentcourseenrollment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Studentcourseenrollment'), array('controller' => 'studentcourseenrollments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
