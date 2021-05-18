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

Route::get('/','HomeController@welcome') ;
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', 'HomeController@welcome')->name('welcome');


//Route::get('/bienetre', 'HomeController@bienetre')->name('bienetre');


Route::get('/admin-dashboard', function(){
return view('admin.dashboard');
})->middleware('auth' , 'admin' )->name('admin.dashboard');


Route::resource('restaurations', 'Admin\RestaurationController');

Route::resource('reservations','Admin\ReservationController');


Route::resource('bienetres', 'Admin\BienetreController');


Route::resource('services', 'Admin\ServiceController');
