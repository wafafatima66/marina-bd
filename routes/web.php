<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('admin/page', 'AdminController@admin')->name('admin.page');

// Route::get('payment', 'singleRoomController@admin')->name('admin.page');


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('customer/payment', 'SingleRoomController@payment')->name('customer.payment');
Route::get('customer/payment', 'DoubleRoomController@payment')->name('customer.payment');
Route::get('customer/payment', 'TrippleRoomController@payment')->name('customer.payment');
Route::get('customer/payment', 'FamillyRoomController@payment')->name('customer.payment');

// Route::get('payment/customer', function () {
//     return view("payment.payment");
// });


Route::get('single', 'SingleRoomController@single')->name('single.room');
Route::post('store/single_room', 'SingleRoomController@store')->name('store.single_room');
Route::get('reserve-room/customer', 'SingleRoomController@create')->name('reserve.roomcustomer');
Route::POST('store/reserve-room/customer', 'SingleRoomController@storesinglecustomer')->name('store.single_customer');


Route::get('double', 'DoubleRoomController@double')->name('double.room');
Route::post('store/double_room', 'DoubleRoomController@store')->name('store.double_room');
Route::get('reserve-double-room/customer', 'DoubleRoomController@create')->name('reserve.doublecustomer');
Route::POST('store/double-room/customer', 'DoubleRoomController@storedoublecustomer')->name('store.double_customer');


Route::get('tripple', 'TrippleRoomController@tripple')->name('tripple.room');
Route::post('store/tripple_room', 'TrippleRoomController@store')->name('store.tripple_room');
Route::get('reserve-tripple-room/customer', 'TrippleRoomController@create')->name('reserve.tripplecustomer');
Route::POST('store/tripple-room/customer', 'TrippleRoomController@storetripplecustomer')->name('store.tripple_customer');


Route::get('familly', 'FamillyRoomController@familly')->name('familly.room');
Route::post('store/familly_room', 'FamillyRoomController@store')->name('store.familly_room');
Route::get('reserve-familly-room/customer', 'FamillyRoomController@create')->name('reserve.famillycustomer');
Route::POST('store/familly-room/customer', 'FamillyRoomController@storefamillycustomer')->name('store.familly_customer');


Route::get('registration/page', 'RegistrationController@registration')->name('registration.page');
Route::post('store/registration', 'RegistrationController@store')->name('store.registration');
Route::post('store/sroom-user', 'RegistrationController@srbook')->name('srbook.registration');
Route::get('all/single-room-customer', 'RegistrationController@AllCustomer')->name('all.customer');
Route::get('view/single_customer/{id}', 'RegistrationController@ViewSingleCustomer');
Route::get('delete/single-customer/{id}', 'RegistrationController@DeleteSinglecustomer');

/**Route::get('double/room/page', 'DoubleRoomController@Booking')->name('booking.page');
Route::post('store/booking/customer', 'DoubleRoomController@store')->name('store.customer');
Route::get('all/single-room-customer', 'DoubleRoomController@AllCustomer')->name('all.customer');
Route::get('view/single_customer/{id}', 'DoubleRoomController@ViewDoubleCustomer');
Route::get('delete/single-customer/{id}', 'DoubleRoomController@DeleteDoublecustomer');*/

Route::get('restaurent', 'RestaurentController@restaurent')->name('restaurent.page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
