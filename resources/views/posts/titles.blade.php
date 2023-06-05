@extends("layouts.app")

@section("title")
    post titles
@endsection

@section("content")
<ul>
 @forelse ($titles as $k => $t)
    @if($loop->even)       {{-- $loop variable use full for common task with a loop  --}}
     <li>
     {{$k}}- {{$t}}
    </li>
    @else
    <li style="background-color: silver">
        {{$k}}- {{$t}}
    </li>
    @endif
 @empty
     not any title yet!
 @endforelse
</ul>
@endsection