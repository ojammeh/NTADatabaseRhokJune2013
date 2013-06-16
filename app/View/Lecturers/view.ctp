<div class="lecturers view">
<h2><?php  echo __('Lecturer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lecturercode'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['lecturercode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Institution'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lecturer['Institution']['name'], array('controller' => 'institutions', 'action' => 'view', $lecturer['Institution']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primaryphonenumber'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['primaryphonenumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Secondaryphonenumber'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['secondaryphonenumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['nationality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lecturer'), array('action' => 'edit', $lecturer['Lecturer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lecturer'), array('action' => 'delete', $lecturer['Lecturer']['id']), null, __('Are you sure you want to delete # %s?', $lecturer['Lecturer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lecturers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lecturer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($lecturer['Course'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Lecturer Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($lecturer['Course'] as $course): ?>
		<tr>
			<td><?php echo $course['id']; ?></td>
			<td><?php echo $course['name']; ?></td>
			<td><?php echo $course['lecturer_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), null, __('Are you sure you want to delete # %s?', $course['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
