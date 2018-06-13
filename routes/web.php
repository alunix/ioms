<?php

Auth::routes();

Route::get('/', 'AnggotaController@index');
Route::get('profile', 'AnggotaController@profile');
Route::get('profile/edit', 'AnggotaController@edit');
Route::post('profile/store', 'AnggotaController@store');
Route::post('profile/store-password','AnggotaController@storePassword');

Route::get('piket-harian','PiketHarianController@index');
Route::post('piket-harian/piket/{denda}/{id}','PiketHarianController@piket');

Route::get('user-management', 'AdminController@getAllUser');
Route::post('user-management/delete/{id}','AdminController@deleteUser');
Route::post('user-management/restore/{id}','AdminController@restoreUser');

// Route::get('{username_edit}/profile','AnggotaController@edit');
// Route::get('{username}','AnggotaController@index');

// Route::group(['middleware' => ['auth','admin']], function(){
//
// });
