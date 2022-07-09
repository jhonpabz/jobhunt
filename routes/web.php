<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('jobs', [
        'heading' => 'Latest Jobs',
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Job One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                tenetur error, harum nesciunt ipsum debitis quas aliquid.'
            ],
            [
                'id' => 2,
                'title' => 'Job Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                tenetur error, harum nesciunt ipsum debitis quas aliquid.'
            ]
        ]
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