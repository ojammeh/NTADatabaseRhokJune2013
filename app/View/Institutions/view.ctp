<div class="institutions view">
<h2><?php  echo __('Institution'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Institutiontype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($institution['Institutiontype']['value'], array('controller' => 'institutiontypes', 'action' => 'view', $institution['Institutiontype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localgovernmentarea'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['localgovernmentarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postalboxnumber'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['postalboxnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['region']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Town'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['town']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phonenumber'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['phonenumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emailaddress'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['emailaddress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ntaid'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['ntaid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sourceoffinancialsupport'); ?></dt>
		<dd>
			<?php echo h($institution['Institution']['sourceoffinancialsupport']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Institution'), array('action' => 'edit', $institution['Institution']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Institution'), array('action' => 'delete', $institution['Institution']['id']), null, __('Are you sure you want to delete # %s?', $institution['Institution']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutiontypes'), array('controller' => 'institutiontypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institutiontype'), array('controller' => 'institutiontypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financialdatas'), array('controller' => 'financialdatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financialdata'), array('controller' => 'financialdatas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lecturers'), array('controller' => 'lecturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lecturer'), array('controller' => 'lecturers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Financialdatas'); ?></h3>
	<?php if (!empty($institution['Financialdata'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Institution Id'); ?></th>
		<th><?php echo __('Centralgovtrevenue'); ?></th>
		<th><?php echo __('Localgovtrevenue'); ?></th>
		<th><?php echo __('Developmentpartnersrevenue'); ?></th>
		<th><?php echo __('Owngeneratedrevenue'); ?></th>
		<th><?php echo __('Outstandingarrears'); ?></th>
		<th><?php echo __('Staffcost'); ?></th>
		<th><?php echo __('Administrationexpenses'); ?></th>
		<th><?php echo __('Other'); ?></th>
		<th><?php echo __('Yearquarter'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($institution['Financialdata'] as $financialdata): ?>
		<tr>
			<td><?php echo $financialdata['id']; ?></td>
			<td><?php echo $financialdata['institution_id']; ?></td>
			<td><?php echo $financialdata['centralgovtrevenue']; ?></td>
			<td><?php echo $financialdata['localgovtrevenue']; ?></td>
			<td><?php echo $financialdata['developmentpartnersrevenue']; ?></td>
			<td><?php echo $financialdata['owngeneratedrevenue']; ?></td>
			<td><?php echo $financialdata['outstandingarrears']; ?></td>
			<td><?php echo $financialdata['staffcost']; ?></td>
			<td><?php echo $financialdata['administrationexpenses']; ?></td>
			<td><?php echo $financialdata['other']; ?></td>
			<td><?php echo $financialdata['yearquarter']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'financialdatas', 'action' => 'view', $financialdata['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'financialdatas', 'action' => 'edit', $financialdata['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'financialdatas', 'action' => 'delete', $financialdata['id']), null, __('Are you sure you want to delete # %s?', $financialdata['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Financialdata'), array('controller' => 'financialdatas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Lecturers'); ?></h3>
	<?php if (!empty($institution['Lecturer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Lecturercode'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Institution Id'); ?></th>
		<th><?php echo __('Primaryphonenumber'); ?></th>
		<th><?php echo __('Secondaryphonenumber'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Nationality'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($institution['Lecturer'] as $lecturer): ?>
		<tr>
			<td><?php echo $lecturer['id']; ?></td>
			<td><?php echo $lecturer['lecturercode']; ?></td>
			<td><?php echo $lecturer['firstname']; ?></td>
			<td><?php echo $lecturer['lastname']; ?></td>
			<td><?php echo $lecturer['institution_id']; ?></td>
			<td><?php echo $lecturer['primaryphonenumber']; ?></td>
			<td><?php echo $lecturer['secondaryphonenumber']; ?></td>
			<td><?php echo $lecturer['address']; ?></td>
			<td><?php echo $lecturer['nationality']; ?></td>
			<td><?php echo $lecturer['email']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lecturers', 'action' => 'view', $lecturer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lecturers', 'action' => 'edit', $lecturer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lecturers', 'action' => 'delete', $lecturer['id']), null, __('Are you sure you want to delete # %s?', $lecturer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lecturer'), array('controller' => 'lecturers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Students'); ?></h3>
	<?php if (!empty($institution['Student'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Institution Id'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Middlename'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Nationality'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Dateofbirth'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Hasgraduated'); ?></th>
		<th><?php echo __('Major'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Primaryphonenumber'); ?></th>
		<th><?php echo __('Secondaryphonenumber'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Studentcode'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($institution['Student'] as $student): ?>
		<tr>
			<td><?php echo $student['id']; ?></td>
			<td><?php echo $student['institution_id']; ?></td>
			<td><?php echo $student['firstname']; ?></td>
			<td><?php echo $student['middlename']; ?></td>
			<td><?php echo $student['lastname']; ?></td>
			<td><?php echo $student['gender']; ?></td>
			<td><?php echo $student['nationality']; ?></td>
			<td><?php echo $student['role']; ?></td>
			<td><?php echo $student['dateofbirth']; ?></td>
			<td><?php echo $student['address']; ?></td>
			<td><?php echo $student['status']; ?></td>
			<td><?php echo $student['hasgraduated']; ?></td>
			<td><?php echo $student['major']; ?></td>
			<td><?php echo $student['email']; ?></td>
			<td><?php echo $student['primaryphonenumber']; ?></td>
			<td><?php echo $student['secondaryphonenumber']; ?></td>
			<td><?php echo $student['fax']; ?></td>
			<td><?php echo $student['studentcode']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'students', 'action' => 'delete', $student['id']), null, __('Are you sure you want to delete # %s?', $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
