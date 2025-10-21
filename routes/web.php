<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'uz'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

Route::get('/', fn() => view('home'));