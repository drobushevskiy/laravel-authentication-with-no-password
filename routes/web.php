<?php

Route::get('/', function(){
    return view('welcome');
});

Route::get('login', 'Auth\LoginController@create')->name('login');
Route::post('login', 'Auth\LoginController@store');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/auth/token/{token}', 'Auth\LoginController@auth');
Route::get('dashboard', function(){
    return 'You are sign in. Welcome, '.auth()->user()->name;
})->middleware('auth');
