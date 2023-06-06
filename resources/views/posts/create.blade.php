@extends("layouts.app")

@section("title", "create post")

@section("content")
   <form method="POST" action="/posts">
        @csrf 
        <label for="title">
            Title :<input type="text" name="title">
        </label>
        <label for="content">
            Content:<input type="text" name="content">
        </label>
        <button type="submit">create</button>
   </form>
@endsection