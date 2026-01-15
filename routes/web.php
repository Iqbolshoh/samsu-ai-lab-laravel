<?php

use App\Models\About;
use App\Models\Member;
use App\Models\News;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Activity;
use App\Models\Banner;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    $activities = Activity::latest()->get();
    $banners = Banner::where('is_active', true)->orderBy('position')->get();
    return view('home', compact('activities', 'banners'));
});

// About page
Route::get('/about', function () {
    $about = About::first();
    return view('about', compact('about'));
});

// News listing
Route::get('/news', function () {
    $query = News::latest();

    if (request()->has('type') && in_array(request('type'), ['news', 'announcement'])) {
        $query->where('type', request('type'));
    }

    $news = $query->paginate(6);
    return view('news', compact('news'));
});

// News detail page
Route::get('/news/{id}', function ($id) {
    $news = News::findOrFail($id);
    return view('news-show', compact('news'));
});

// Projects listing with optional category filter
Route::get('/projects', function () {
    $categories = ProjectCategory::orderBy('name_en')->get();
    $query = Project::with('category');

    if (request()->has('category') && request('category') !== '') {
        $query->where('project_category_id', request('category'));
    }

    $projects = $query->latest()->paginate(6);

    return view('projects', compact('categories', 'projects'));
});

// Members listing
Route::get('/members', function () {
    $members = Member::latest()->paginate(6);
    return view('members', compact('members'));
});

// Fallback for undefined routes
Route::fallback(function () {
    return response()->view('404', [], 404);
});
