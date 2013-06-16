<div class="institutions form">
<?php echo $this->Form->create('Institution'); ?>
	<fieldset>
		<legend><?php echo __('Edit Institution'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('institutiontype_id');
		echo $this->Form->input('localgovernmentarea');
		echo $this->Form->input('postalboxnumber');
		echo $this->Form->input('region');
		echo $this->Form->input('town');
		echo $this->Form->input('address');
		echo $this->Form->input('phonenumber');
		echo $this->Form->input('emailaddress');
		echo $this->Form->input('ntaid');
		echo $this->Form->input('fax');
		echo $this->Form->input('website');
		echo $this->Form->input('sourceoffinancialsupport');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Institution.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Institution.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('action' => 'index')); ?></li>
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
