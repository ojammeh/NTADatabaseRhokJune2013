<div class="institutions index">
	<h2><?php echo __('Institutions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('ntaid', 'NTA ID'); ?></th>
			<th><?php echo $this->Paginator->sort('institutiontype_id', 'Type'); ?></th>
			<th><?php echo $this->Paginator->sort('town'); ?></th>
			<th><?php echo $this->Paginator->sort('phonenumber', 'Telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('emailaddress', 'E-mail'); ?></th>

			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($institutions as $institution): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($institution['Institution']['name'], array('controller' => 'courses', 'action' => 'index', $institution['Institution']['id'])); ?>
		</td>
		<td><?php echo h($institution['Institution']['ntaid']); ?>&nbsp;</td>
		<td>
			<?php echo $institution['Institutiontype']['value']; ?>
		</td>
		<td><?php echo h($institution['Institution']['town']); ?>&nbsp;</td>
		<td><?php echo h($institution['Institution']['phonenumber']); ?>&nbsp;</td>
		<td><?php echo h($institution['Institution']['emailaddress']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $institution['Institution']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $institution['Institution']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $institution['Institution']['id']), null, __('Are you sure you want to delete # %s?', $institution['Institution']['id'])); ?>
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
	<?php echo $this->Html->link(__('Add New Institution'), array('action' => 'add'), array('class' => 'btn btn-success')); ?>
	<!--
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Institution'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutiontypes'), array('controller' => 'institutiontypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institutiontype'), array('controller' => 'institutiontypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financialdatas'), array('controller' => 'financialdatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financialdata'), array('controller' => 'financialdatas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lecturers'), array('controller' => 'lecturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lecturer'), array('controller' => 'lecturers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
 -->
</div>
