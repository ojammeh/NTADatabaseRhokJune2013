<div class="financialdatas index">
	<h2><?php echo __('Finance'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('institution_id'); ?></th>
			<th><?php echo $this->Paginator->sort('centralgovtrevenue'); ?></th>
			<th><?php echo $this->Paginator->sort('localgovtrevenue'); ?></th>
			<th><?php echo $this->Paginator->sort('developmentpartnersrevenue'); ?></th>
			<th><?php echo $this->Paginator->sort('owngeneratedrevenue'); ?></th>
			<th><?php echo $this->Paginator->sort('outstandingarrears'); ?></th>
			<th><?php echo $this->Paginator->sort('staffcost'); ?></th>
			<th><?php echo $this->Paginator->sort('administrationexpenses'); ?></th>
			<th><?php echo $this->Paginator->sort('other'); ?></th>
			<th><?php echo $this->Paginator->sort('yearquarter'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($financialdatas as $financialdata): ?>
	<tr>
		<td><?php echo h($financialdata['Financialdata']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($financialdata['Institution']['name'], array('controller' => 'institutions', 'action' => 'view', $financialdata['Institution']['id'])); ?>
		</td>
		<td><?php echo h($financialdata['Financialdata']['centralgovtrevenue']); ?>&nbsp;</td>
		<td><?php echo h($financialdata['Financialdata']['localgovtrevenue']); ?>&nbsp;</td>
		<td><?php echo h($financialdata['Financialdata']['developmentpartnersrevenue']); ?>&nbsp;</td>
		<td><?php echo h($financialdata['Financialdata']['owngeneratedrevenue']); ?>&nbsp;</td>
		<td><?php echo h($financialdata['Financialdata']['outstandingarrears']); ?>&nbsp;</td>
		<td><?php echo h($financialdata['Financialdata']['staffcost']); ?>&nbsp;</td>
		<td><?php echo h($financialdata['Financialdata']['administrationexpenses']); ?>&nbsp;</td>
		<td><?php echo h($financialdata['Financialdata']['other']); ?>&nbsp;</td>
		<td><?php echo h($financialdata['Financialdata']['yearquarter']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $financialdata['Financialdata']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $financialdata['Financialdata']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $financialdata['Financialdata']['id']), null, __('Are you sure you want to delete # %s?', $financialdata['Financialdata']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Financialdata'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
	</ul>
</div>
