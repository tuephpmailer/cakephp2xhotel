<?php
App::uses('AppController', 'Controller');
/**
 * Hotels Controller
 *
 * @property Hotel $Hotel
 * @property PaginatorComponent $Paginator
 */
class HotelsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Hotel->recursive = 0;
		$this->set('hotels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Hotel->exists($id)) {
			throw new NotFoundException(__('Invalid hotel'));
		}
		$options = array('conditions' => array('Hotel.' . $this->Hotel->primaryKey => $id));
		$this->set('hotel', $this->Hotel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Hotel->create();
			if ($this->Hotel->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel could not be saved. Please, try again.'));
			}
		}
		$sites = $this->Hotel->Site->find('list');
		$hotelGroups = $this->Hotel->HotelGroup->find('list');
		$hotelTypes = $this->Hotel->HotelType->find('list');
		$hotelThemes = $this->Hotel->HotelTheme->find('list');
		$countries = $this->Hotel->Country->find('list');
		$states = $this->Hotel->State->find('list');
		$cities = $this->Hotel->City->find('list');
		$starRatings = $this->Hotel->StarRating->find('list');
		$hotelFacilityCategories = $this->Hotel->HotelFacilityCategory->find('list');
		$hotelFacilities = $this->Hotel->HotelFacility->find('list');
		$hotelCancellationPolicies = $this->Hotel->HotelCancellationPolicy->find('list');
		$hotelModificationPolicies = $this->Hotel->HotelModificationPolicy->find('list');
		$hotelGroups = $this->Hotel->HotelGroup->find('list');
		$hotelCancellationPolicies = $this->Hotel->HotelCancellationPolicy->find('list');
		$hotelFacilities = $this->Hotel->HotelFacility->find('list');
		$hotelFacilityCategories = $this->Hotel->HotelFacilityCategory->find('list');
		$hotelModificationPolicies = $this->Hotel->HotelModificationPolicy->find('list');
		$hotelThemes = $this->Hotel->HotelTheme->find('list');
		$pointNearByHotels = $this->Hotel->PointNearByHotel->find('list');
		$starRatings = $this->Hotel->StarRating->find('list');
		$taxes = $this->Hotel->Tax->find('list');
		$this->set(compact('sites', 'hotelGroups', 'hotelTypes', 'hotelThemes', 'countries', 'states', 'cities', 'starRatings', 'hotelFacilityCategories', 'hotelFacilities', 'hotelCancellationPolicies', 'hotelModificationPolicies', 'hotelGroups', 'hotelCancellationPolicies', 'hotelFacilities', 'hotelFacilityCategories', 'hotelModificationPolicies', 'hotelThemes', 'pointNearByHotels', 'starRatings', 'taxes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Hotel->exists($id)) {
			throw new NotFoundException(__('Invalid hotel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hotel->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hotel.' . $this->Hotel->primaryKey => $id));
			$this->request->data = $this->Hotel->find('first', $options);
		}
		$sites = $this->Hotel->Site->find('list');
		$hotelGroups = $this->Hotel->HotelGroup->find('list');
		$hotelTypes = $this->Hotel->HotelType->find('list');
		$hotelThemes = $this->Hotel->HotelTheme->find('list');
		$countries = $this->Hotel->Country->find('list');
		$states = $this->Hotel->State->find('list');
		$cities = $this->Hotel->City->find('list');
		$starRatings = $this->Hotel->StarRating->find('list');
		$hotelFacilityCategories = $this->Hotel->HotelFacilityCategory->find('list');
		$hotelFacilities = $this->Hotel->HotelFacility->find('list');
		$hotelCancellationPolicies = $this->Hotel->HotelCancellationPolicy->find('list');
		$hotelModificationPolicies = $this->Hotel->HotelModificationPolicy->find('list');
		$hotelGroups = $this->Hotel->HotelGroup->find('list');
		$hotelCancellationPolicies = $this->Hotel->HotelCancellationPolicy->find('list');
		$hotelFacilities = $this->Hotel->HotelFacility->find('list');
		$hotelFacilityCategories = $this->Hotel->HotelFacilityCategory->find('list');
		$hotelModificationPolicies = $this->Hotel->HotelModificationPolicy->find('list');
		$hotelThemes = $this->Hotel->HotelTheme->find('list');
		$pointNearByHotels = $this->Hotel->PointNearByHotel->find('list');
		$starRatings = $this->Hotel->StarRating->find('list');
		$taxes = $this->Hotel->Tax->find('list');
		$this->set(compact('sites', 'hotelGroups', 'hotelTypes', 'hotelThemes', 'countries', 'states', 'cities', 'starRatings', 'hotelFacilityCategories', 'hotelFacilities', 'hotelCancellationPolicies', 'hotelModificationPolicies', 'hotelGroups', 'hotelCancellationPolicies', 'hotelFacilities', 'hotelFacilityCategories', 'hotelModificationPolicies', 'hotelThemes', 'pointNearByHotels', 'starRatings', 'taxes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Hotel->id = $id;
		if (!$this->Hotel->exists()) {
			throw new NotFoundException(__('Invalid hotel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hotel->delete()) {
			$this->Session->setFlash(__('Hotel deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
