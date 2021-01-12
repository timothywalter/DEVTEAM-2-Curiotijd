@php
    use App\Models\task;
@endphp

{{-- @foreach ($challenges as $challenge)
    {{$challenge->id}}
    {{$challenge->task}}
@endforeach --}}


<p>{{$challenges->task}}</p>