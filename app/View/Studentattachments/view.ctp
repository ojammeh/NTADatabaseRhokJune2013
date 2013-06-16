<div class="studentattachments view">
<h2><?php  echo __('Studentattachment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentattachment['Studentattachment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentattachment['Student']['firstname'], array('controller' => 'students', 'action' => 'view', $studentattachment['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attachmentlocation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentattachment['Attachmentlocation']['name'], array('controller' => 'attachmentlocations', 'action' => 'view', $studentattachment['Attachmentlocation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($studentattachment['Studentattachment']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Studentattachment'), array('action' => 'edit', $studentattachment['Studentattachment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Studentattachment'), array('action' => 'delete', $studentattachment['Studentattachment']['id']), null, __('Are you sure you want to delete # %s?', $studentattachment['Studentattachment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Studentattachments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Studentattachment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attachmentlocations'), array('controller' => 'attachmentlocations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attachmentlocation'), array('controller' => 'attachmentlocations', 'action' => 'add')); ?> </li>
	</ul>
</div>
