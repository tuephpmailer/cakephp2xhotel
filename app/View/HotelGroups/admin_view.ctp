<div class="hotelGroups view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Group'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Hotel Group'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelGroup['HotelGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelGroup['Site']['name'], array('controller' => 'sites', 'action' => 'view', $hotelGroup['Site']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($hotelGroup['HotelGroup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo html_entity_decode(h($hotelGroup['HotelGroup']['description'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Group Logo'); ?></dt>
		<dd>
			<?php //echo h($hotelGroup['HotelGroup']['hotel_group_logo']); ?>
			<?php
			$filename = ROOT.DS."app".DS."webroot".DS."img".DS."hotel_group_logo".DS.h($hotelGroup['HotelGroup']['hotel_group_logo_dir']).DS.h($hotelGroup['HotelGroup']['hotel_group_logo']);
			if(file_exists($filename)) {
				echo $this->Html->image('/app/webroot/img/hotel_group_logo/' . h($hotelGroup['HotelGroup']['hotel_group_logo_dir'] . "/small_".h($hotelGroup['HotelGroup']['hotel_group_logo'])), array('alt'=>h($hotelGroup['HotelGroup']['name'])));
			} else {
				echo $this->Html->image('/app/webroot/img/admin/small_no_image.png', array('alt'=>h($hotelGroup['HotelGroup']['name'])));
			}
			?>
		</dd>
		<dt><?php echo __('Group Order'); ?></dt>
		<dd>
			<?php echo h($hotelGroup['HotelGroup']['group_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($hotelGroup['HotelGroup']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($hotelGroup['HotelGroup']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keyword'); ?></dt>
		<dd>
			<?php echo h($hotelGroup['HotelGroup']['meta_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php if(h($hotelGroup['HotelGroup']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } //echo h($hotelGroup['HotelGroup']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hotelGroup['HotelGroup']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hotelGroup['HotelGroup']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>
<?php /* ?>
<div class="related">
	<h3><?php echo __('Related Hotels'); ?></h3>
	<?php if (!empty($hotelGroup['Hotel'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Hotel Group Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Short Description'); ?></th>
		<th><?php echo __('Long Description'); ?></th>
		<th><?php echo __('Hotel Logo'); ?></th>
		<th><?php echo __('Hotel Order'); ?></th>
		<th><?php echo __('Point Near By Hotel'); ?></th>
		<th><?php echo __('Hotel Type Id'); ?></th>
		<th><?php echo __('Hotel Theme Id'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Address Line1'); ?></th>
		<th><?php echo __('Address Line2'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Latitude'); ?></th>
		<th><?php echo __('Longitude'); ?></th>
		<th><?php echo __('Star Rating Id'); ?></th>
		<th><?php echo __('Checkindatetime'); ?></th>
		<th><?php echo __('Checkoutdatetime'); ?></th>
		<th><?php echo __('Hotel Facility Category Id'); ?></th>
		<th><?php echo __('Hotel Facility Id'); ?></th>
		<th><?php echo __('Hotel Image'); ?></th>
		<th><?php echo __('Hotel Video'); ?></th>
		<th><?php echo __('Pricing Tax Status'); ?></th>
		<th><?php echo __('Hotel Tax'); ?></th>
		<th><?php echo __('Meta Title'); ?></th>
		<th><?php echo __('Meta Description'); ?></th>
		<th><?php echo __('Meta Keyword'); ?></th>
		<th><?php echo __('Main Keyword Tag'); ?></th>
		<th><?php echo __('Nearby Location Tag'); ?></th>
		<th><?php echo __('Hotel Cancellation Policy Id'); ?></th>
		<th><?php echo __('Hotel Modification Policy Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hotelGroup['Hotel'] as $hotel): ?>
		<tr>
			<td><?php echo $hotel['id']; ?></td>
			<td><?php echo $hotel['site_id']; ?></td>
			<td><?php echo $hotel['hotel_group_id']; ?></td>
			<td><?php echo $hotel['name']; ?></td>
			<td><?php echo $hotel['short_description']; ?></td>
			<td><?php echo $hotel['long_description']; ?></td>
			<td><?php echo $hotel['hotel_logo']; ?></td>
			<td><?php echo $hotel['hotel_order']; ?></td>
			<td><?php echo $hotel['point_near_by_hotel']; ?></td>
			<td><?php echo $hotel['hotel_type_id']; ?></td>
			<td><?php echo $hotel['hotel_theme_id']; ?></td>
			<td><?php echo $hotel['area']; ?></td>
			<td><?php echo $hotel['address_line1']; ?></td>
			<td><?php echo $hotel['address_line2']; ?></td>
			<td><?php echo $hotel['country_id']; ?></td>
			<td><?php echo $hotel['state_id']; ?></td>
			<td><?php echo $hotel['city_id']; ?></td>
			<td><?php echo $hotel['latitude']; ?></td>
			<td><?php echo $hotel['longitude']; ?></td>
			<td><?php echo $hotel['star_rating_id']; ?></td>
			<td><?php echo $hotel['checkindatetime']; ?></td>
			<td><?php echo $hotel['checkoutdatetime']; ?></td>
			<td><?php echo $hotel['hotel_facility_category_id']; ?></td>
			<td><?php echo $hotel['hotel_facility_id']; ?></td>
			<td><?php echo $hotel['hotel_image']; ?></td>
			<td><?php echo $hotel['hotel_video']; ?></td>
			<td><?php echo $hotel['pricing_tax_status']; ?></td>
			<td><?php echo $hotel['hotel_tax']; ?></td>
			<td><?php echo $hotel['meta_title']; ?></td>
			<td><?php echo $hotel['meta_description']; ?></td>
			<td><?php echo $hotel['meta_keyword']; ?></td>
			<td><?php echo $hotel['main_keyword_tag']; ?></td>
			<td><?php echo $hotel['nearby_location_tag']; ?></td>
			<td><?php echo $hotel['hotel_cancellation_policy_id']; ?></td>
			<td><?php echo $hotel['hotel_modification_policy_id']; ?></td>
			<td><?php echo $hotel['status']; ?></td>
			<td><?php echo $hotel['modified']; ?></td>
			<td><?php echo $hotel['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotels', 'action' => 'view', $hotel['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotels', 'action' => 'edit', $hotel['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotels', 'action' => 'delete', $hotel['id']), null, __('Are you sure you want to delete # %s?', $hotel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div><?php */ ?>
