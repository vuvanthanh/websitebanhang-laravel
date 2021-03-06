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

Route::group(['prefix' => 'admin'],function(){

	Route::get('/index.html','AdminController@index')->name('index');
	
	Route::get('users/add.html','AdminController@getAddUser')->name('getAddUser');

	Route::post('users/add.html','AdminController@setAddUser')->name('setAddUser');

	Route::get('users/list.html','AdminController@getListUser')->name('getListUser');

	Route::get('users/delete/{id?}','AdminController@deleteUser')->name('deleteUser');

});
Route::get('index.html','PageController@getindex');

Route::get('list.html','PageController@getlist');

Route::get('quick-view.html','PageController@getquickview');

Route::get('product-detail.html','PageController@productdetail');

Route::get('contact-us.html','PageController@contact'); 
