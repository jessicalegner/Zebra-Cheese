<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/dashboard', array('as' => 'dash', 'uses' => 'DashController@index'));

Route::get('/ticket/create', array('as' => 'createTicket', 'uses' => 'TicketController@create'));
Route::get('/ticket/store', array('as' => 'ticket.store', 'uses' => 'TicketController@store'));

Route::get('/ticket/create/{query}', array('as' => 'customer.search', 'uses' => 'SearchController@searchCustomers'));

Route::get('/admin/manage/devices', array('as' => 'manage.devices', 'uses' => 'AdminController@manageDevices'));

Route::get('/device/edit', array('as' => 'device.edit', 'uses' => 'DeviceController@edit'));
Route::delete('/device/delete', array('as' => 'device.delete', 'uses' => 'DeviceController@destroy'));
Route::get('/device/update', array('as' => 'device.update', 'uses' => 'DeviceController@update'));
Route::post('/device/store', array('as' => 'device.store', 'uses' => 'DeviceController@store'));
Route::get('/device/create', array('as' => 'device.create', 'uses' => 'DeviceController@create'));