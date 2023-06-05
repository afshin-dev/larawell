@extends("layouts.app")

@section("title", $post["title"])

@section("content")
    <p>{{$post["desc"]}}</p>
    @if ($post["is_new"])
        new post
    @endif
    @unless ($post["is_new"])
        old post
    @endunless
    @isset($post["has_comment"])
        <p>[comment section]</p>
    @endisset
@endsection