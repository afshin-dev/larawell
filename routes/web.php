<?php

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
    return view('welcome');
});
Route::get("/users", function () {
    return view("users.home");
})->name("users.home")
;

Route::get("/posts/{id}", function($id) {
    $posts = [
        ["title" => "t1" , "desc" => "desc1" ],
        ["title" => "t2" , "desc" => "desc2" ],
    ];

    abort_if(!isset($posts[$id]), 404);



    $post = array_key_exists($id, $posts) ? $posts[$id] : [] ;  
    return view("posts.details", ["post" =>$post ]);
})->name("posts.details");