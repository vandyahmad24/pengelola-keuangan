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
//kategori
Route::get('/home','HomeController@index');
Route::get('/kategori','KategoriController@index');
Route::get('/kategori/add','KategoriController@add');
Route::post('/kategori/add/store','KategoriController@store');
Route::get('/kategori/delete/{id}','KategoriController@destroy');
Route::get('/kategori/edit/{id}', 'KategoriController@edit');
Route::post('/kategori/edit/update/{id}', 'KategoriController@update');

//transaksi

Route::get('/transaksi','TransaksiController@index');
Route::get('/transaksi/add','TransaksiController@add');
Route::get('/transaksi/add/{id}','TransaksiController@idkategori');
Route::post('/transaksi/add/store','TransaksiController@store');
Route::get('/transaksi/delete/{id}','TransaksiController@destroy');
Route::get('/transaksi/edit/{id}','TransaksiController@edit');
Route::post('/transaksi/edit/{id}','TransaksiController@update');

// filter transaksi
Route::post('/transaksi/filter/','TransaksiController@filter');
