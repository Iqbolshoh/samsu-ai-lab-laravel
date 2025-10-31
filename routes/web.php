<?php

use App\Models\About;
use App\Models\Member;
use App\Models\News;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));

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