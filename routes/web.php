<?php

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;

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
// register/create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  


// ALL JOB LISTINGS
Route::get('/', [JobController::class, 'index']);

// SHOW CREATE FORM
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');

// STORE JOB LISTING DATA
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

// SHOW EDIT FORM
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth');

// UPDATE job listing
Route::put('/jobs/{job}', [JobController::class,
'update'])->middleware('auth');

// DELETE job listing
Route::delete('/jobs/{job}', [JobController::class,
'destroy'])->middleware('auth');

// MANAGE JOB LISTINGS
Route::get('jobs/manage',[JobController::class, 'manage'])->middleware('auth');

// SINGLE JOB LISTING
Route::get('/jobs/{job}', [JobController::class, 'show']);

// SHOW REGISTER/CREATE FORM
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// CREATE NEW USER
Route::post('/users', [UserController::class, 'store']);

//Logout User
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');

// SHOW LOGIN FORM
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');

// LOGIN USER
Route::post('users/authenticate',[UserController::class, 'authenticate']);



