<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'GuestController@home')-> name('home');

Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');

Route::post('/register', 'Auth\RegisterController@register') -> name('register');

Route::post('/login', 'Auth\LoginController@login') -> name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
