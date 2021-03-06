<div class="hotelGroups index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Groups'); ?></span></div>
    <div class="content_mid">
	<!--<h2><?php // echo __('Hotel Groups'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_group_logo'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>

			<?php /* ?><th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('group_order'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelGroups as $hotelGroup): ?>
	<tr>
		<td><?php echo h($hotelGroup['HotelGroup']['id']); ?>&nbsp;</td>
		<td><?php echo h($hotelGroup['HotelGroup']['name']); ?>&nbsp;</td>
		<td>
		<?php
			$filename = ROOT.DS."app".DS."webroot".DS."img".DS."hotel_group_logo".DS.h($hotelGroup['HotelGroup']['hotel_group_logo_dir']).DS.h($hotelGroup['HotelGroup']['hotel_group_logo']);
			if(file_exists($filename)) {
				echo $this->Html->image('/app/webroot/img/hotel_group_logo/' . h($hotelGroup['HotelGroup']['hotel_group_logo_dir'] . "/thumb_".h($hotelGroup['HotelGroup']['hotel_group_logo'])), array('alt'=>h($hotelGroup['HotelGroup']['name'])));
			} else {
				echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($hotelGroup['HotelGroup']['name'])));
			}
		?>&nbsp;		
		</td>
		<td><?php if(h($hotelGroup['HotelGroup']['status'])) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
	
		
		<?php /* ?>
		<td>
			<?php echo $this->Html->link($hotelGroup['Site']['name'], array('controller' => 'sites', 'action' => 'view', $hotelGroup['Site']['id'])); ?>
		</td>
		<td><?php echo h($hotelGroup['HotelGroup']['description']); ?>&nbsp;</td>
		<td><?php echo h($hotelGroup['HotelGroup']['group_order']); ?>&nbsp;</td>
		<td><?php echo h($hotelGroup['HotelGroup']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($hotelGroup['HotelGroup']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($hotelGroup['HotelGroup']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($hotelGroup['HotelGroup']['modified']); ?>&nbsp;</td>
		<td><?php echo h($hotelGroup['HotelGroup']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelGroup['HotelGroup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelGroup['HotelGroup']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelGroup['HotelGroup']['id']), null, __('Are you sure you want to delete # %s?', $hotelGroup['HotelGroup']['id'])); ?>
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
