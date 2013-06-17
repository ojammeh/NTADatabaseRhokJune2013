<div class="students index">
	<h2><?php echo __('Students'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('institution_id'); ?></th>
			<th><?php echo $this->Paginator->sort('studentcode'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('middlename'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>

			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('primaryphonenumber'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($students as $student): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($student['Institution']['name'], array('controller' => 'institutions', 'action' => 'view', $student['Institution']['id'])); ?>
		</td>
		<td><?php echo h($student['Student']['studentcode']); ?>&nbsp;</td>
		
		<td><?php echo h($student['Student']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['middlename']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['lastname']); ?>&nbsp;</td>

		<td><?php echo h($student['Student']['email']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['primaryphonenumber']); ?>&nbsp;</td>

		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $student['Student']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $student['Student']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $student['Student']['id']), null, __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentattachments'), array('controller' => 'studentattachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentattachment'), array('controller' => 'studentattachments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentcourseenrollments'), array('controller' => 'studentcourseenrollments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentcourseenrollment'), array('controller' => 'studentcourseenrollments', 'action' => 'add')); ?> </li>
	</ul>
</div>
