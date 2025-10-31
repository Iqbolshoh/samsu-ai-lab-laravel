<?php

use App\Models\About;
use App\Models\Member;
use App\Models\News;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Activity;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $activities = Activity::latest()->take(6)->get();
    return view('home', compact('activities'));
});

Route::get('/about', function () {
    $about = About::first();
    return view('about', compact('about'));
});

Route::get('/news', function () {
    $news = News::latest()->paginate(6);
    return view('news', compact('news'));
});

Route::get('/news/{id}', function ($id) {
    $news = News::findOrFail($id);
    return view('news-show', compact('news'));
});

Route::get('/projects', function () {
    $categories = ProjectCategory::orderBy('name_en')->get();
    $query = Project::with('category');

    if (request()->has('category') && request('category') !== '') {
        $query->where('project_category_id', request('category'));
    }

    $projects = $query->latest()->paginate(6);

    return view('projects', compact('categories', 'projects'));
});

Route::get('/members', function () {
    $members = Member::latest()->get();
    return view('members', compact('members'));
});

Route::fallback(function () {
    return response()->view('404', [], 404);
});