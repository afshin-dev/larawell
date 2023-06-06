@extends("layouts.app")

@section("title", "create post")

@section("content")
   <form method="POST" action="/posts">
        @csrf 
        <label for="title">
            Title :<input type="text" name="title" value="{{old('title')}}">
            @error("title")
                {{$message}}
            @enderror
        </label>
        <label for="content">
            Content:<input type="text" name="content" value="{{old('content')}}">
            @error("content")
                {{$message}}
            @enderror
        </label>
        <button type="submit">create</button>
   </form>
@endsection