<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'GuestController@home')-> name('home');

Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');

Route::get('/post/create','GuestController@createPost')->name('post.create');
Route::get('/post/edit/{id}','GuestController@edit')->name('post.edit');
Route::post('/post/update/{id}','GuestController@update')->name('post.update');
Route::get('/post/delete/{id}','GuestController@delete')->name('post.delete');

Route::post('/register', 'Auth\RegisterController@register') -> name('register');
Route::post('post/store','GuestController@store') -> name('post.store');

Route::post('/login', 'Auth\LoginController@login') -> name('login');

//Auth::routes();

Route::get('/posts', 'GuestController@post')->name('posts');
