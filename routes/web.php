<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Homecontrolle@home')-> name('home');
