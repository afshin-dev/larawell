@extends("layouts.app")

@section("title", $post["title"])

@section("content")
    <p>{{$post["desc"]}}</p>
    @if ($post["is_new"])
        new post
    @endif
@endsection