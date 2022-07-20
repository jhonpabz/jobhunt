<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ALL JOB LISTINGS
Route::get('/', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

// SINGLE JOB LISTING
Route::get('/jobs/{job}', function (Job $job) {
    return view('job', [
        'job' => $job
    ]);
});
