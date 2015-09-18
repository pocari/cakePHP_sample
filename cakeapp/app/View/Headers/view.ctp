<div class="headers view">
<h2><?php echo __('Header'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($header['Header']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($header['Header']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Header'), array('action' => 'edit', $header['Header']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Header'), array('action' => 'delete', $header['Header']['id']), array(), __('Are you sure you want to delete # %s?', $header['Header']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Headers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Header'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details'), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail'), array('controller' => 'details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Details'); ?></h3>
	<?php if (!empty($header['Detail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Header Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($header['Detail'] as $detail): ?>
		<tr>
			<td><?php echo $detail['id']; ?></td>
			<td><?php echo $detail['header_id']; ?></td>
			<td><?php echo $detail['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'details', 'action' => 'view', $detail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'details', 'action' => 'edit', $detail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'details', 'action' => 'delete', $detail['id']), array(), __('Are you sure you want to delete # %s?', $detail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Detail'), array('controller' => 'details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
