<?php

use App\Http\Controllers\JobController;
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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  


// ALL JOB LISTINGS
Route::get('/', [JobController::class, 'index']);

// SHOW CREATE FORM
Route::get('/jobs/create', [JobController::class, 'create']);

// STORE JOB LISTING DATA
Route::post('/jobs', [JobController::class, 'store']);

// SHOW EDIT FORM
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

// UPDATE job listing
Route::put('/jobs/{job}', [JobController::class,
'update']);

// SINGLE JOB LISTING
Route::get('/jobs/{job}', [JobController::class, 'show']);