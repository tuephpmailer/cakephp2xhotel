<div class="states index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('States'); ?></span></div>
    <div class="content_mid">
	<!--<h2><?php // echo __('States'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<?php /* ?><th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($states as $state): ?>
	<tr>
		<td><?php echo h($state['State']['id']); ?>&nbsp;</td>
		<td><?php echo h($state['State']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($state['Country']['name'], array('controller' => 'countries', 'action' => 'view', $state['Country']['id'])); ?>
		</td>
		<td><?php if(h($state['State']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
		<?php /* ?><td><?php echo h($state['State']['description']); ?>&nbsp;</td>
		<td><?php echo h($state['State']['modified']); ?>&nbsp;</td>
		<td><?php echo h($state['State']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $state['State']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $state['State']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $state['State']['id']), null, __('Are you sure you want to delete # %s?', $state['State']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
</div>
<?php echo $this->element('left_nav');?>
