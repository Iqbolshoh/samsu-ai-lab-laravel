<?php

use App\Models\About;
use App\Models\CollaborationForm;
use App\Models\Member;
use App\Models\News;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Activity;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Home Page
|--------------------------------------------------------------------------
| Loads latest activities and active banners
*/

Route::get('/', function () {
    $activities = Activity::latest()->get();
    $banners = Banner::where('is_active', true)->orderBy('position')->get();
    return view('home', compact('activities', 'banners'));
});

/*
|--------------------------------------------------------------------------
| About Page
|--------------------------------------------------------------------------
| Shows general information about the platform
*/
Route::get('/about', function () {
    $about = About::first();
    return view('about', compact('about'));
});

/*
|--------------------------------------------------------------------------
| News Listing Page
|--------------------------------------------------------------------------
| Shows paginated news with optional type filter
*/
Route::get('/news', function () {
    $query = News::latest();

    if (request()->has('type') && in_array(request('type'), ['news', 'announcement'])) {
        $query->where('type', request('type'));
    }

    $news = $query->paginate(6);
    return view('news', compact('news'));
});

/*
|--------------------------------------------------------------------------
| News Detail Page
|--------------------------------------------------------------------------
| Shows single news item by id
*/
Route::get('/news/{id}', function ($id) {
    $news = News::findOrFail($id);
    return view('news-show', compact('news'));
});

/*
|--------------------------------------------------------------------------
| Projects Listing Page
|--------------------------------------------------------------------------
| Shows projects with category filter
*/
Route::get('/projects', function () {
    $categories = ProjectCategory::orderBy('name_en')->get();
    $query = Project::with('category');

    if (request()->has('category') && request('category') !== '') {
        $query->where('project_category_id', request('category'));
    }

    $projects = $query->latest()->paginate(6);
    return view('projects', compact('categories', 'projects'));
});

/*
|--------------------------------------------------------------------------
| Members Listing Page
|--------------------------------------------------------------------------
| Shows paginated members list
*/
Route::get('/members', function () {
    $members = Member::latest()->paginate(6);
    return view('members', compact('members'));
});

/*
|--------------------------------------------------------------------------
| Collaboration Page
|--------------------------------------------------------------------------
| Shows collaboration and partnership information
*/
Route::get('/collaboration', function () {
    return view('collaboration');
});

/*
|--------------------------------------------------------------------------
| Collaboration Form Submit (POST)
|--------------------------------------------------------------------------
| Handles collaboration form submission.
*/
Route::post('/collaboration-form', function (Request $request) {

    $validated = $request->validate([
        'first_name'         => 'required|string|max:100',
        'last_name'          => 'required|string|max:100',
        'email'              => 'required|email|max:150',
        'organization'       => 'nullable|string|max:150',
        'collaboration_type' => 'required|string|max:100',
        'message'            => 'required|string|min:5|max:2000',
    ]);

    CollaborationForm::create($validated);

    return response()->json([
        'status'  => true,
        'message' => 'Message received successfully'
    ]);
})->middleware('throttle:3,1');

/*
|--------------------------------------------------------------------------
| Fallback Route
|--------------------------------------------------------------------------
| Handles all undefined routes
*/
Route::fallback(function () {
    return response()->view('404', [], 404);
});
