@extends("layouts.app")

@section("title")
    post titles
@endsection

@section("content")
<ul>
 @forelse ($titles as $k => $t)
     <li>
     {{$k}}- {{$t}}
    </li>
 @empty
     not any title yet!
 @endforelse
</ul>
@endsection