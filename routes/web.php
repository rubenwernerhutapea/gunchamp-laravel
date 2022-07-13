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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/lomba', 'LombaController@index')->name('lomba');
Route::get('/details/{id?}', 'DetailController@index')->name('detail');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/profile', 'DashboardProfileController@index')->name('profile');
Route::get('/dashboard/lomba', 'DashboardLombaController@index')->name('lomba');
Route::get('/dashboard/lomba/add', 'DashboardLombaController@create')->name('tambah-lomba');

//->middleware(['auth', 'admin'])
Route::prefix('admin')
  ->namespace('Admin')
  ->group(function() {
      Route::get('/', 'DashboardController@index')->name('admin-dashboard');
  });

Auth::routes();


