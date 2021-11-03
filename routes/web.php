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


    route::middleware('auth')->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/welcome', 'HomeController@welcome')->name('welcome');
    Route::get('/gallerie', 'HomeController@gallerie')->name('gallerie');
    Route::resource('registers', 'Auth\RegisterController');
    Route::resource('activites2', 'User\ActiviteController');
    Route::resource('reservations2', 'User\ReservationController');
    // admin middlewere route group
    route::middleware('role')->namespace('Admin')->prefix('admin')->group(function()
    {
        Route::get('/dashboard', function(){
            return view('admin.dashboard');
         }) ->name('admin.dashboard');

         
        Route::resource('activites', 'ActiviteController');
        Route::resource('reservations','ReservationController');
        Route::resource('users','UserController');
    });
});
