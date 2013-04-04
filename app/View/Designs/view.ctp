<div class="designs view">
<h2><?php  echo __('Design'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($design['Design']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($design['Order']['id'], array('controller' => 'orders', 'action' => 'view', $design['Order']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($design['Design']['url']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Design'), array('action' => 'edit', $design['Design']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Design'), array('action' => 'delete', $design['Design']['id']), null, __('Are you sure you want to delete # %s?', $design['Design']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Designs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Design'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
