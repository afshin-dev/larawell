@extends("layouts.app")

@section("title")
    post titles
@endsection

@section("content")
<ul>
  @foreach ($titles as $k => $t)
    <li>
      {{$k}}.{{$t}}
    </li>
  @endforeach
</ul>
@endsection