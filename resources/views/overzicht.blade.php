@php
    use App\Models\task;

    $public = 'http://localhost/stage-opdracht/public';

@endphp
<link rel="stylesheet" href="<?=$public?>/css/overzicht.css"> 

@extends('layout.main')

@section('title')
    Challenges
@endsection

@section('content')
<div class="container">
    <p></p>
        <br>
    <h2>Taken:</h2>
    @foreach ($challenges as $challenge)
        {{$challenge->id}}
        {{$challenge->task}}
        <br>
    @endforeach
    
    
    @foreach ($users as $user)
    <p>Gebruiker {{$user->name}} heeft {{$user->total_EXP}} XP, klik <a href="">HIER</a> om het aan te passen</p>
    
    @endforeach
</div>


@endsection