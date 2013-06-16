<div class="institutiontypes view">
<h2><?php  echo __('Institutiontype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($institutiontype['Institutiontype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($institutiontype['Institutiontype']['value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Institutiontype'), array('action' => 'edit', $institutiontype['Institutiontype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Institutiontype'), array('action' => 'delete', $institutiontype['Institutiontype']['id']), null, __('Are you sure you want to delete # %s?', $institutiontype['Institutiontype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutiontypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institutiontype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Institutions'); ?></h3>
	<?php if (!empty($institutiontype['Institution'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Institutiontype Id'); ?></th>
		<th><?php echo __('Localgovernmentarea'); ?></th>
		<th><?php echo __('Postalboxnumber'); ?></th>
		<th><?php echo __('Region'); ?></th>
		<th><?php echo __('Town'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Phonenumber'); ?></th>
		<th><?php echo __('Emailaddress'); ?></th>
		<th><?php echo __('Ntaid'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Sourceoffinancialsupport'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($institutiontype['Institution'] as $institution): ?>
		<tr>
			<td><?php echo $institution['id']; ?></td>
			<td><?php echo $institution['name']; ?></td>
			<td><?php echo $institution['institutiontype_id']; ?></td>
			<td><?php echo $institution['localgovernmentarea']; ?></td>
			<td><?php echo $institution['postalboxnumber']; ?></td>
			<td><?php echo $institution['region']; ?></td>
			<td><?php echo $institution['town']; ?></td>
			<td><?php echo $institution['address']; ?></td>
			<td><?php echo $institution['phonenumber']; ?></td>
			<td><?php echo $institution['emailaddress']; ?></td>
			<td><?php echo $institution['ntaid']; ?></td>
			<td><?php echo $institution['fax']; ?></td>
			<td><?php echo $institution['website']; ?></td>
			<td><?php echo $institution['sourceoffinancialsupport']; ?></td>
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
