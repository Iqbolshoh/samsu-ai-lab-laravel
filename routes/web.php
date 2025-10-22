<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', fn() => view('home'));
Route::get('/about', fn() => view('about'));
Route::get('/news', fn() => view('news'));
Route::get('/projects', fn() => view('projects'));
Route::get('/members', fn() => view('members'));