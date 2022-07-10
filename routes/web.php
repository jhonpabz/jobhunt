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
        'heading' => 'Latest Jobs',
        'jobs' => Job::all()
    ]);
});

// SINGLE JOB LISTING
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::find($id)
    ]);
});









// Route::get('/hello', function() {
//     return response("<h1>Hello world</h1>", 200)
//     ->header("Content-Type", "text/plain")
//     ->header("asdf", "test header");
// });

// Route::get('/posts/{id}', function($id){
//     dd($id);
//     return response("Post " . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     // dd($request);
//     return $request->name . ' ' . $request-> city;
// });
// http://jobhunt.test/search?name=Jhon&city=Urdaneta