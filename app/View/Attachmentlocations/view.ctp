<div class="attachmentlocations view">
<h2><?php  echo __('Attachmentlocation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($attachmentlocation['Attachmentlocation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($attachmentlocation['Attachmentlocation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($attachmentlocation['Attachmentlocation']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo h($attachmentlocation['Attachmentlocation']['region']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attachmentlocation'), array('action' => 'edit', $attachmentlocation['Attachmentlocation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attachmentlocation'), array('action' => 'delete', $attachmentlocation['Attachmentlocation']['id']), null, __('Are you sure you want to delete # %s?', $attachmentlocation['Attachmentlocation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attachmentlocations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attachmentlocation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentattachments'), array('controller' => 'studentattachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentattachment'), array('controller' => 'studentattachments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Studentattachments'); ?></h3>
	<?php if (!empty($attachmentlocation['Studentattachment'])): ?>
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
		foreach ($attachmentlocation['Studentattachment'] as $studentattachment): ?>
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
