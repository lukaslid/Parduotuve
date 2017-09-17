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
Route::get('/', 'OrderController@index');
Route::post('/', 'OrderController@store');

//Route::get('', 'DatatablesController@getIndex', [
//    'anyData'  => 'datatables.data',
//    'getIndex' => 'datatables',
//]);

Route::get('orders', ['uses'=>'DatatablesController@getIndex']);
Route::get('orders/all', ['as'=>'datatables.getorders','uses'=>'DatatablesController@getOrders']);


Route::get('orders/makeComplete/{order}', 'DatatablesController@makeComplete');
Route::get('orders/inComplete/{order}', 'DatatablesController@inComplete');
Route::get('orders/Delete/{order}', 'DatatablesController@destroy');



