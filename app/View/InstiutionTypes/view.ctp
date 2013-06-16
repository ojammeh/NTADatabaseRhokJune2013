<div class="instiutionTypes view">
<h2><?php  echo __('Instiution Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instiutionType['InstiutionType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($instiutionType['InstiutionType']['value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instiution Type'), array('action' => 'edit', $instiutionType['InstiutionType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instiution Type'), array('action' => 'delete', $instiutionType['InstiutionType']['id']), null, __('Are you sure you want to delete # %s?', $instiutionType['InstiutionType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instiution Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instiution Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Institutions'); ?></h3>
	<?php if (!empty($instiutionType['Institution'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Local Government Area'); ?></th>
		<th><?php echo __('Postal Box Number'); ?></th>
		<th><?php echo __('Region'); ?></th>
		<th><?php echo __('Town'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Phone Number'); ?></th>
		<th><?php echo __('Email Address'); ?></th>
		<th><?php echo __('Nta Id'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Source Of Financial Support'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($instiutionType['Institution'] as $institution): ?>
		<tr>
			<td><?php echo $institution['id']; ?></td>
			<td><?php echo $institution['name']; ?></td>
			<td><?php echo $institution['type']; ?></td>
			<td><?php echo $institution['local_government_area']; ?></td>
			<td><?php echo $institution['postal_box_number']; ?></td>
			<td><?php echo $institution['region']; ?></td>
			<td><?php echo $institution['town']; ?></td>
			<td><?php echo $institution['address']; ?></td>
			<td><?php echo $institution['phone_number']; ?></td>
			<td><?php echo $institution['email_address']; ?></td>
			<td><?php echo $institution['nta_id']; ?></td>
			<td><?php echo $institution['fax']; ?></td>
			<td><?php echo $institution['website']; ?></td>
			<td><?php echo $institution['source_of_financial_support']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'institutions', 'action' => 'view', $institution['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'institutions', 'action' => 'edit', $institution['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'institutions', 'action' => 'delete', $institution['id']), null, __('Are you sure you want to delete # %s?', $institution['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
