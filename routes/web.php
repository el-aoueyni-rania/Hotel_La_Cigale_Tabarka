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

Route::get('/admin', function(){
    return view('admin.dashboard');
})->middleware('auth','admin')->name('admin.dashboard');
Route::resource('bienetres', 'Admin\BienetreController');
/*

Route::resource('bienetres', 'Admin\BienetreController');

Route::get('/admin-dashboard', function(){
return view('admin.dashboard');
})->middleware('auth' , 'admin' )->name('admin.dashboard');
Route::get('/admin-dashboard', function(){
return view('admin.dashboard');
})->middleware('auth' , 'admin' )->name('admin.dashboard');
Route::resource('restaurations', 'Admin\RestaurationController');
//Route::get('/bienetre', 'HomeController@bienetre')->name('bienetre');
=======
    // admin middlewere route group
    route::middleware('admin')->namespace('Admin')->prefix('admin')->group(function() 
    {
        Route::get('/dashboard', function(){
            return view('admin.dashboard');
         }) ->name('admin.dashboard');
        
        Route::resource('activites', 'ActiviteController');
        Route::resource('restaurations', 'RestaurationController');
        Route::resource('reservations','ReservationController');
        Route::resource('users','UserController');
        Route::resource('bienetres', 'BienetreController');
        Route::resource('services', 'ServiceController');
    });
});