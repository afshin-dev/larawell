<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{

    // Route::get('/', function () {
    //     return view('welcome');
    // }); 
    //

    public function home() {
        return view('welcome');
    }


    // Route::view("/contact", "home.contact")->name("home.contact");
    public function contact() {
        return view('home.contact');
    }
}
