<?php
/**
 * HotelRoomsHotelFacilityCategoryFixture
 *
 */
class HotelRoomsHotelFacilityCategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'hotel_room_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hotel_facility_category_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'hotel_room_id' => 1,
			'hotel_facility_category_id' => 1
		),
	);

}
