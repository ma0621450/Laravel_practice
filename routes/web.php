<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});
Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', [
        'job' => $job
    ]);
});
