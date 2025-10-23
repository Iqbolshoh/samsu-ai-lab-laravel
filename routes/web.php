<?php

use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/about', fn() => view('about'));

Route::get('/news', function () {
    $news = News::latest()->paginate(6);
    return view('news', compact('news'));
});

Route::get('/projects', fn() => view('projects'));
Route::get('/members', fn() => view('members'));