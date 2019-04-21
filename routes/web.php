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
    return view('users/login');
});
Route::get('/user/login', 'User\LoginController@index')->name('login');
Route::get('/user/register', 'User\RegisterController@index')->name('register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// VENDOR {CRUD}
Route::get('/vendor', 'Admin\VendorController@index')->name('vendor.index');
Route::get('/vendor/create', 'Admin\VendorController@create')->name('vendor.create');
Route::get('/vendor/update/{$id}', 'Admin\VendorController@edit')->name('vendor.update');

// KATEGORI {CRUD}
Route::get('/kategori', 'Admin\KategoriController@index')->name('kategori.index');
Route::get('/kategori/create', 'Admin\KategoriController@create')->name('kategori.create');
Route::get('/kategori/update/{$id}', 'Admin\KategoriController@edit')->name('kategori.update');
