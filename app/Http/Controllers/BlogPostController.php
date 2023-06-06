<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    //
    public function index() {
        $all_blogs = BlogPost::all() ;
        return view("posts.index", ["blogs" => $all_blogs]) ;
    }
    public function create(){
        return view("posts.create") ;
    }
    public function store(Request $req) {

        $req->validate([
            "title" => ["required" , "min:2" , "max:1000"] ,
            "content" => ["required" , "min:5"] 
        ]);
        
        $title = $req->input("title") ;
        $content = $req->input("content") ;

        $blog = new BlogPost() ;
        $blog->title = $title ;
        $blog->content = $content ;
        $blog->save() ;

        $req->session()->flash("msg-create", "blog with id $blog->id created");
        
        return redirect()->route("posts.index") ;
    }
}
