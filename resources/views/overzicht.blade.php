@php
    use App\Models\task;
@endphp

@extends('layout.main')

@section('title')
    Challenges
@endsection

@section('content')
    
<h2>Taken:</h2>
@foreach ($challenges as $challenge)
    {{$challenge->id}}
    {{$challenge->task}}
    <br>
@endforeach


@foreach ($users as $user)
<p>Gebruiker {{$user->name}} heeft {{$user->total_EXP}} XP, klik <a href="">HIER</a> om het aan te passen</p>

@endforeach

@endsection