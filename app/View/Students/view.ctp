<div class="students view">
<h2><?php  echo __('Student'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Institution'); ?></dt>
		<dd>
			<?php echo $this->Html->link($student['Institution']['name'], array('controller' => 'institutions', 'action' => 'view', $student['Institution']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($student['Student']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middlename'); ?></dt>
		<dd>
			<?php echo h($student['Student']['middlename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($student['Student']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($student['Student']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo h($student['Student']['nationality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($student['Student']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dateofbirth'); ?></dt>
		<dd>
			<?php echo h($student['Student']['dateofbirth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($student['Student']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($student['Student']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hasgraduated'); ?></dt>
		<dd>
			<?php echo h($student['Student']['hasgraduated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Major'); ?></dt>
		<dd>
			<?php echo h($student['Student']['major']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($student['Student']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primaryphonenumber'); ?></dt>
		<dd>
			<?php echo h($student['Student']['primaryphonenumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Secondaryphonenumber'); ?></dt>
		<dd>
			<?php echo h($student['Student']['secondaryphonenumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($student['Student']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Studentcode'); ?></dt>
		<dd>
			<?php echo h($student['Student']['studentcode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['id']), null, __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentattachments'), array('controller' => 'studentattachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentattachment'), array('controller' => 'studentattachments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentcourseenrollments'), array('controller' => 'studentcourseenrollments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentcourseenrollment'), array('controller' => 'studentcourseenrollments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Studentattachments'); ?></h3>
	<?php if (!empty($student['Studentattachment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Attachmentlocation Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($student['Studentattachment'] as $studentattachment): ?>
		<tr>
			<td><?php echo $studentattachment['id']; ?></td>
			<td><?php echo $studentattachment['student_id']; ?></td>
			<td><?php echo $studentattachment['attachmentlocation_id']; ?></td>
			<td><?php echo $studentattachment['type']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'studentattachments', 'action' => 'view', $studentattachment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'studentattachments', 'action' => 'edit', $studentattachment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'studentattachments', 'action' => 'delete', $studentattachment['id']), null, __('Are you sure you want to delete # %s?', $studentattachment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Studentattachment'), array('controller' => 'studentattachments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Studentcourseenrollments'); ?></h3>
	<?php if (!empty($student['Studentcourseenrollment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($student['Studentcourseenrollment'] as $studentcourseenrollment): ?>
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
