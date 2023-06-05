<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\BeforeMiddleware;
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
})->middleware(BeforeMiddleware::class); 


Route::view("/contact", "home.contact")->name("home.contact");

Route::get("/users", function () {
    return view("users.home");
})->name("users.home")
;

Route::get('/posts/titles', function() {
    $titles = [
        "t1",
        "t2",
        "t3",
    ];
    return view("posts.titles", ["titles" => $titles]);
})->name('posts.titles');

Route::get("/posts/{id}", function($id) {
    $posts = [
        ["title" => "t1" , "desc" => "desc1" , "is_new" =>true, "has_comment" => true ],
        ["title" => "t2" , "desc" => "desc2" , "is_new" => false],
    ];

    abort_if(!isset($posts[$id]), 404);



    $post = array_key_exists($id, $posts) ? $posts[$id] : [] ;  
    return view("posts.details", ["post" =>$post ]);
})->name("posts.details");


// checkout resource 
Route::prefix('/checkout')->group(function() {

    Route::get("/response", function() {
        $arr = ["one" => 1, "two" => 2] ;
        return response($arr, 200)->header("Content-Type", "application/json")->cookie("remember", false, 3600);
    });

    Route::get("/request", function() {
        // dd(request());
        dd(request()->input("page", 1)); // get specifiv input (query params, request body)
        
    });
    
    
    Route::get("/redirect", function() {
        return redirect("/");
        // back() back to history page 
        // redirect()->route(<route_name>) redirect to a named route  
        // redirect()->away(<url>)
    });
    
    Route::get("/json/{s}", function(string $s){
        return response()->json(str_split($s));
    });
    
    Route::get("/download/person", function(){
        return response()->download(public_path("person.jpg"), "person.jpg");
    });


});
