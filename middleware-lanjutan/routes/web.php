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



Route::middleware(['auth'])->group(function(){
    Route::get('/route-3', 'UserController@route_3')->name('route3');
});

Route::middleware(['auth', 'user'])->group(function(){
    Route::get('/route-1', 'UserController@route_1')->name('route1');
    Route::get('/route-2', 'UserController@route_2')->name('route2');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
