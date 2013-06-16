<div class="studentattachments index">
	<h2><?php echo __('Studentattachments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('attachmentlocation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($studentattachments as $studentattachment): ?>
	<tr>
		<td><?php echo h($studentattachment['Studentattachment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($studentattachment['Student']['firstname'], array('controller' => 'students', 'action' => 'view', $studentattachment['Student']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($studentattachment['Attachmentlocation']['name'], array('controller' => 'attachmentlocations', 'action' => 'view', $studentattachment['Attachmentlocation']['id'])); ?>
		</td>
		<td><?php echo h($studentattachment['Studentattachment']['type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentattachment['Studentattachment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentattachment['Studentattachment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentattachment['Studentattachment']['id']), null, __('Are you sure you want to delete # %s?', $studentattachment['Studentattachment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Studentattachment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attachmentlocations'), array('controller' => 'attachmentlocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attachmentlocation'), array('controller' => 'attachmentlocations', 'action' => 'add')); ?> </li>
	</ul>
</div>
