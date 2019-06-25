<?php

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
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/public', ['as' => 'public', 'uses' => 'HomeController@show']);
Route::resource('vehicles', 'VehicleController');
Route::post('vehicles/{id}','VehicleController@update_status')->name('vehicles.update_status');
Route::resource('rentals', 'RentalController');
Route::get('rentals/vehicles/{id}','RentalController@rent')->name('rentals.vehicles.rent');
Route::resource('users', 'UserController');