@php

    // if (Auth::user()->isTeacher != 1) {
    //     return redirect()->route('login');
    // }


    use App\Models\Achievement;
    use App\Models\AchievementList;
    use App\Models\task;

    $id = Auth::user()->id;
    $name = Auth::user()->name;
@endphp

@auth

@extends('layout.main')

<head>
    <link rel="stylesheet" href="css\dashboard-style.css">
</head>
@section('title')
    Docent dashboard
@endsection

@section('content')

<div class="container">
    <h1>dashboard</h1>
    <h2>Welkom bij Curiotijd, {{$name}}</h2>
    <hr>

    {{-- first row --}}
    <div class="row">

 {{-- left collumn --}}
    <div class="col-6 ml-4">
        <h2>Nieuwe accounts:</h2>
        <hr>
        <ol>
            @foreach ($accounts as $account)
                <li>name: {{$account->name}}
                    <br>
                klas: {{$account->className}}</li>
                <div class="button-align">
                    <form action="{{route('user.verify', $account->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-primary mr-3" value="{{$account->id}}">Goedkeuren</button>
                    </form>

                    <form action="{{route('user.dontVerify', $account->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-primary mr-3" value="{{$account->id}}"> afkeuren</button>
                    </form>
                    
                </div>
                
                <hr>
            @endforeach
        </ol>
    </div>

{{-- right column --}}
    <div class="col-5">
        <h2>Challenges</h2>
        <hr>
        <p>Hieronder ziet u een overzicht van waar alle studenten mee bezig zijn, en hoe ver ze zijn!</p>
        {{-- foreacht loop die alle leerlingen laat zien en als je erop klikt ga je naar de detail page --}}
        @foreach ($accounts as $account)
            <ul class="list-unstyled" >
                <li><a href={{route('overzicht.overzicht', $account->id)}}>
                    {{$account->name}}
                    {{$account->id}}
                </a></li>
            </ul>
        @endforeach
    </div>
</div>
</div>
{{-- end of first row --}}
@endauth