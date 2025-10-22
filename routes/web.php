<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', fn() => view('home'));
Route::get('/about', fn() => view('about'));