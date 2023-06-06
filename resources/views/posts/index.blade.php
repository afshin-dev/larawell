@extends("layouts.app")

@section("title", "blogs")

@section("content")
    <ul>
       @forelse ($blogs as $blog)
           <li>{{$blog->title}}</li>
       @empty
           there is no blog yet
       @endforelse
    </ul>
@endsection