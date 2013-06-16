<div class="attachmentlocations index">
	<h2><?php echo __('Attachmentlocations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('region'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($attachmentlocations as $attachmentlocation): ?>
	<tr>
		<td><?php echo h($attachmentlocation['Attachmentlocation']['id']); ?>&nbsp;</td>
		<td><?php echo h($attachmentlocation['Attachmentlocation']['name']); ?>&nbsp;</td>
		<td><?php echo h($attachmentlocation['Attachmentlocation']['address']); ?>&nbsp;</td>
		<td><?php echo h($attachmentlocation['Attachmentlocation']['region']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $attachmentlocation['Attachmentlocation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attachmentlocation['Attachmentlocation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attachmentlocation['Attachmentlocation']['id']), null, __('Are you sure you want to delete # %s?', $attachmentlocation['Attachmentlocation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Attachmentlocation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Studentattachments'), array('controller' => 'studentattachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentattachment'), array('controller' => 'studentattachments', 'action' => 'add')); ?> </li>
	</ul>
</div>
