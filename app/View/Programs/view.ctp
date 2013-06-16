<div class="programs view">
<h2><?php  echo __('Program'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($program['Program']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($program['Program']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Programoffered'); ?></dt>
		<dd>
			<?php echo h($program['Program']['programoffered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tuitionfee'); ?></dt>
		<dd>
			<?php echo h($program['Program']['tuitionfee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accretidedbynta'); ?></dt>
		<dd>
			<?php echo h($program['Program']['accretidedbynta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($program['Program']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Internationalexam'); ?></dt>
		<dd>
			<?php echo h($program['Program']['internationalexam']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($program['Program']['remarks']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Program'), array('action' => 'edit', $program['Program']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Program'), array('action' => 'delete', $program['Program']['id']), null, __('Are you sure you want to delete # %s?', $program['Program']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Programs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Program'), array('action' => 'add')); ?> </li>
	</ul>
</div>
