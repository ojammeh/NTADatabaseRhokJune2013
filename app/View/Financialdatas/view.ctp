<div class="financialdatas view">
<h2><?php  echo __('Financialdata'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($financialdata['Financialdata']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Institution'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financialdata['Institution']['name'], array('controller' => 'institutions', 'action' => 'view', $financialdata['Institution']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Centralgovtrevenue'); ?></dt>
		<dd>
			<?php echo h($financialdata['Financialdata']['centralgovtrevenue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localgovtrevenue'); ?></dt>
		<dd>
			<?php echo h($financialdata['Financialdata']['localgovtrevenue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Developmentpartnersrevenue'); ?></dt>
		<dd>
			<?php echo h($financialdata['Financialdata']['developmentpartnersrevenue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owngeneratedrevenue'); ?></dt>
		<dd>
			<?php echo h($financialdata['Financialdata']['owngeneratedrevenue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Outstandingarrears'); ?></dt>
		<dd>
			<?php echo h($financialdata['Financialdata']['outstandingarrears']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staffcost'); ?></dt>
		<dd>
			<?php echo h($financialdata['Financialdata']['staffcost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Administrationexpenses'); ?></dt>
		<dd>
			<?php echo h($financialdata['Financialdata']['administrationexpenses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other'); ?></dt>
		<dd>
			<?php echo h($financialdata['Financialdata']['other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Yearquarter'); ?></dt>
		<dd>
			<?php echo h($financialdata['Financialdata']['yearquarter']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Financialdata'), array('action' => 'edit', $financialdata['Financialdata']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Financialdata'), array('action' => 'delete', $financialdata['Financialdata']['id']), null, __('Are you sure you want to delete # %s?', $financialdata['Financialdata']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Financialdatas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financialdata'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutions'), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution'), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
	</ul>
</div>
