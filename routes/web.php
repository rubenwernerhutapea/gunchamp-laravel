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
Route::get('/lomba/details/{id?}', 'DetailController@index')->name('detail');

Route::group(['middleware' => ['auth']], function() {
  Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
  Route::get('/dashboard/profile', 'DashboardProfileController@index')->name('dashboard-profile');
  Route::get('/dashboard/lomba', 'DashboardLombaController@index')->name('dashboard-lomba');
  Route::get('/dashboard/lomba/add', 'DashboardLombaController@create')->name('tambah-lomba');
  Route::get('/dashboard/lomba/{id}', 'DashboardLombaController@edit')->name('edit-lomba');
  Route::post('/dashboard/lomba', 'DashboardLombaController@store')->name('dashboard-lomba-store');
  Route::post('/dashboard/lomba/{id}', 'DashboardLombaController@update')->name('dashboard-lomba-update');
  Route::get('/dashboard/lomba/delete/{id}', 'DashboardLombaController@delete')->name('dashboard-lomba-delete');
});

Route::prefix('admin')
  ->namespace('Admin')
  ->middleware(['auth', 'admin'])
  ->group(function() {
      Route::get('/', 'DashboardController@index')->name('admin-dashboard');
      Route::resource('user', 'UserController');
      Route::resource('lomba', 'LombaController');
  });

Auth::routes();


