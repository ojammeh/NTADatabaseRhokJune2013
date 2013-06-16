<div class="programs form">
<?php echo $this->Form->create('Program'); ?>
	<fieldset>
		<legend><?php echo __('Add Program'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('programoffered');
		echo $this->Form->input('tuitionfee');
		echo $this->Form->input('accretidedbynta');
		echo $this->Form->input('duration');
		echo $this->Form->input('internationalexam');
		echo $this->Form->input('remarks');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Programs'), array('action' => 'index')); ?></li>
	</ul>
</div>
