<div class="details form">
<?php echo $this->Form->create('Detail'); ?>
	<fieldset>
		<legend><?php echo __('Add Detail'); ?></legend>
	<?php
		echo $this->Form->input('header_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Headers'), array('controller' => 'headers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Header'), array('controller' => 'headers', 'action' => 'add')); ?> </li>
	</ul>
</div>
