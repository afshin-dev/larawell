@extends("layouts.app")

@section("title", $post["title"])

@section("content")
    <p>{{$post["desc"]}}</p>
@endsection