<?php

Route::get('/explore', '\App\Http\Controllers\WebsiteController@explore');
Route::get('/','App\Http\Controllers\WebsiteController@home');
Route::get('/login','App\Http\Controllers\WebsiteController@login');
Route::get('/messages','App\Http\Controllers\WebsiteController@messages');
Route::get('/notification','App\Http\Controllers\WebsiteController@notification');
Route::get('/profile','App\Http\Controllers\WebsiteController@profile');
Route::get('/reels','App\Http\Controllers\WebsiteController@reels');
Route::get('/sing_up','App\Http\Controllers\WebsiteController@sing_up');
Route::get('/welcome','App\Http\Controllers\WebsiteController@welcome');