<div class="hotelRoomsHotelFacilityCategories index">
	<h2><?php echo __('Hotel Rooms Hotel Facility Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_room_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_facility_category_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelRoomsHotelFacilityCategories as $hotelRoomsHotelFacilityCategory): ?>
	<tr>
		<td><?php echo h($hotelRoomsHotelFacilityCategory['HotelRoomsHotelFacilityCategory']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelRoomsHotelFacilityCategory['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoomsHotelFacilityCategory['HotelRoom']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelRoomsHotelFacilityCategory['HotelFacilityCategory']['name'], array('controller' => 'hotel_facility_categories', 'action' => 'view', $hotelRoomsHotelFacilityCategory['HotelFacilityCategory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelRoomsHotelFacilityCategory['HotelRoomsHotelFacilityCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelRoomsHotelFacilityCategory['HotelRoomsHotelFacilityCategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelRoomsHotelFacilityCategory['HotelRoomsHotelFacilityCategory']['id']), null, __('Are you sure you want to delete # %s?', $hotelRoomsHotelFacilityCategory['HotelRoomsHotelFacilityCategory']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Hotel Rooms Hotel Facility Category'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facility Categories'), array('controller' => 'hotel_facility_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility Category'), array('controller' => 'hotel_facility_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
