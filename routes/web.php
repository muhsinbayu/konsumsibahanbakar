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

Route::post('form/dokter', 'MasterDataController@storeDokter')->name('master_data.store.dokter');

Route::post('form/radis', 'All@storeRADIS')->name('hitung_radis');
Route::post('form/ras', 'All@storeRAS')->name('hitung_ras');
Route::post('form/rwind', 'All@storeRWIND')->name('hitung_rwind');
Route::post('form/rawl', 'All@storeRAWL')->name('hitung_rawl');
