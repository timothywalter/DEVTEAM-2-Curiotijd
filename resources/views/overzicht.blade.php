@php
    use App\Models\task;
@endphp

@extends('layout.main')

@section('title')
    Challenges
@endsection

@section('content')
    

@foreach ($challenges as $challenge)
    {{$challenge->id}}
    {{$challenge->task}}
@endforeach

@endsection