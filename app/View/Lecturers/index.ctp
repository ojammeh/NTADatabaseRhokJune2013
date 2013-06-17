<div class="lecturers index">
	<h2><?php echo __('Lecturers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('lecturercode'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('institution_id'); ?></th>

			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($lecturers as $lecturer): ?>
	<tr>
		<td><?php echo h($lecturer['Lecturer']['id']); ?>&nbsp;</td>
		<td><?php echo h($lecturer['Lecturer']['lecturercode']); ?>&nbsp;</td>
		<td><?php echo h($lecturer['Lecturer']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($lecturer['Lecturer']['lastname']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lecturer['Institution']['name'], array('controller' => 'institutions', 'action' => 'view', $lecturer['Institution']['id'])); ?>
		</td>

		<td><?php echo h($lecturer['Lecturer']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lecturer['Lecturer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lecturer['Lecturer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lecturer['Lecturer']['id']), null, __('Are you sure you want to delete # %s?', $lecturer['Lecturer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lecturer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
