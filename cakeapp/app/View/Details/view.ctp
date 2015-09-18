<div class="details view">
<h2><?php echo __('Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Header'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detail['Header']['name'], array('controller' => 'headers', 'action' => 'view', $detail['Header']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detail'), array('action' => 'edit', $detail['Detail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detail'), array('action' => 'delete', $detail['Detail']['id']), array(), __('Are you sure you want to delete # %s?', $detail['Detail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Headers'), array('controller' => 'headers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Header'), array('controller' => 'headers', 'action' => 'add')); ?> </li>
	</ul>
</div>
