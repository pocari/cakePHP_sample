<?php $this->assign('title', 'ヘッダ情報'); ?>
<?php $this->start('css-embedded'); ?>
<style type='text/css'>
div.conditions {
	float:left;
	width:16%;
	padding:10px 1.5%;
}
div.conditions h3 {
	padding-top:0;
	color:#777;
}
</style>
<?php $this->end(); ?>

<?php $this->Html->scriptStart(array('inline' => false)); ?>
$(document).ready( function() {
    $("#button01").click(function(){
		var url = '<?php echo $this->Html->url('/headers/sample_ajax', false); ?>';
		var post_data = {
			param01: 'param01_value'
		};

		$.ajax({
			type: 'POST',
			url: url,
			data: post_data,
		}).done(function(data) {
			$('#output').text('return value is:' + data.res.res_param01);
		}).fail(function (jqXHR) {
			console.log(jqXHR);
			console.log(jqXHR.statusText);
		});
    });


});
<?php $this->Html->scriptEnd(); ?>

<div class="headers index">
	<h2><?php echo __('Headers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Header.id'); ?></th>
			<th><?php echo $this->Paginator->sort('Header.name'); ?></th>
			<th><?php echo $this->Paginator->sort('Detail.name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($headers as $header): ?>
	<tr>
		<td><?php echo h($header['Header']['id']); ?>&nbsp;</td>
		<td><?php echo h($header['Header']['name']); ?>&nbsp;</td>
		<td><?php echo h($header['Detail']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $header['Header']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $header['Header']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $header['Header']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $header['Header']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Header'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Details'), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail'), array('controller' => 'details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="conditions">
	<h3><?php echo __('Conditions'); ?></h3>
	<?php echo $this->Form->create('Header', array('action'=>'index')); ?>
		<fieldset>
			<legend>検索</legend>
			<?php echo $this->Form->input('name', array('label' => 'ヘッダ名称', 'class' => 'span12', 'empty' => true)); ?>
			<?php echo $this->Form->input('detail_name', array('label' => 'detail名称', 'class' => 'span12', 'empty' => true)); ?>
		</fieldset>
	<?php echo $this->Form->end('検索'); ?>
	<input type="button" id="button01" value='click' />
	<div id="output">initial value</div>
</div>
