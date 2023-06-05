@extends("layouts.app")

@section("title")
    post titles
@endsection

@section("content")
<ul>
 @forelse ($titles as $k => $t)

   @include("posts.partials.list-item")
 @empty
     not any title yet!
 @endforelse
</ul>
@endsection