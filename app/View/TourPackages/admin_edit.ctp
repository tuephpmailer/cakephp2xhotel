<div class="tourPackages form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Tour Package'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('TourPackage'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Tour Package'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('site_id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('room_type_id');
		echo $this->Form->input('hotel_room_id');
		echo $this->Form->input('name');
		echo $this->Form->input('short_description');
		echo $this->Form->input('long_description', array('class'=>'ckeditor'));
		echo $this->Form->input('tp_order');
		echo $this->Form->input('no_person');
		echo $this->Form->input('activity_type_id');
		echo $this->Form->input('st_pt_state');
		echo $this->Form->input('st_pt_city');
		echo $this->Form->input('st_pt_area');
		echo $this->Form->input('end_pt_state');
		echo $this->Form->input('end_pt_city');
		echo $this->Form->input('end_pt_area');
		echo $this->Form->input('popular_point_id');
		echo $this->Form->input('st_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('price_per_person');
		echo $this->Form->input('pricing_tax_status');
		echo $this->Form->input('tax_id');
		echo $this->Form->input('child_age_below1');
		echo $this->Form->input('price_age_below1');
		echo $this->Form->input('child_age_below2');
		echo $this->Form->input('price_age_below2');
		echo $this->Form->input('child_age_below3');
		echo $this->Form->input('price_age_below3');
		echo $this->Form->input('child_above_age1');
		echo $this->Form->input('price_above_age1');
		echo $this->Form->input('child_above_age2');
		echo $this->Form->input('price_above_age2');
		echo $this->Form->input('child_above_age3');
		echo $this->Form->input('price_above_age3');
		echo $this->Form->input('commision');
		echo $this->Form->input('special_price');
		echo $this->Form->input('special_price_earning');
		echo $this->Form->input('commision_customer');
		echo $this->Form->input('commision_customer_earining');
		echo $this->Form->input('commision_agent');
		echo $this->Form->input('commision_agent_earining');
		echo $this->Form->input('tp_keyword');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('tourpackage.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);		
		echo $this->Form->input('ActivityType');
		echo $this->Form->input('HotelRoom');
		echo $this->Form->input('PopularPoint');
		echo $this->Form->input('Tax');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
