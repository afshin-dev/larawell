{{-- partial view for showing a post in list item tag --}}
{{-- every variable available in parent in access here --}}
@php
// check for neccessary variable that partial work with them
    if(!isset($k)){
        throw new Exception("\$k is must be the key variable of loop");
    }
    if(!isset($t)){
        throw new Exception("\$t is must be the key variable of loop");
    }
    if(!isset($loop)){
        throw new Exception("\$loop variable not available");
    }
@endphp
@if($loop->even)       {{-- $loop variable use full for common task with a loop  --}}
<li>
{{$k}}- {{$t}}
</li>
@else
<li style="background-color: silver">
   {{$k}}- {{$t}}
</li>
@endif