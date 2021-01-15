@php
    use App\Models\Achievement;
    use App\Models\AchievementList;
    use App\Models\task;

    function idToName($achievementID){
        
        return;
    }
    
    $id = Auth::user()->id;
    $name = Auth::user()->name;

    if (Auth::user()->isTeacher == 1) {
        // return redirect()->route('docentDashboard');
    }

@endphp

@auth
@section('title')
    dashboard
@endsection
<link rel="stylesheet" href="css/xp-bar.css">
        <script src="css/xp-bar.js" defer></script>
@extends('layout.main')
{{-- <p>kaas</p> --}}
<head>
    <link rel="stylesheet" href="css\dashboard-style.css">
</head>

@section('content')

<div class="container">
    <h1>dashboard</h1>
    <h2>Welkom bij Curiotijd, {{$name}}</h2>
    <hr>

    {{-- first row --}}
    <div class="row">
    {{-- Left task bar --}}
        <div class="col-2 border">
        <h3>Taken:</h3>
        {{-- foreach loop for tasks --}}
        <a href="docentDashboard">docent NU</a>
        @foreach ($tasks as $task)
            <a href="" class="left">{{$task->task}}</a>
            <hr>
        @endforeach

        <a class="red" href="{{ url('tasks') }}">
            <button type="button" class="btn btn-success">
            maak een task aan!
            </button>
        </a>
        </div>

 {{-- middle collumn --}}
    <div class="col-5">
        <h3>Huidige taak: CurioTijd</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, laudantium necessitatibus obcaecati maxime, temporibus cupiditate aliquid ipsam quisquam, sequi tempora omnis amet natus? Necessitatibus rerum accusantium, libero consectetur obcaecati deserunt.</p>
    </div>

 {{-- 3th collumn --}}
    <div class="col-5">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum provident porro magni iusto, numquam sunt voluptas illum maiores obcaecati incidunt. Quam culpa voluptates quas, repellendus et excepturi sint maxime vero!</p>
    </div>
</div>
{{-- end of first row --}}

<hr>
{{-- start of seccond row --}}
    <div class="row">
        <div class="col-8">
            <p class="xpToLevelUp">You need {{$xptolevelup}} more xp to level up!</p>
            <div class="xp_bar" style="--width: {{$xpbarprocent}}" data-label="Experience"><p class="level">Level: {{$level}}</p></div>
        </div>
    <div class="col-2">
        <button type="button" onclick="leaderbordToggle()" class="btn btn-primary">Leaderbord</button>
    </div>

    <div class="col-2">
        <button type="button" onclick="badgeToggle()" class="btn btn-primary">Badges</button>
    </div>
{{-- leaderbord DIV --}}
    <div id="leaderbordDIV">
        <h3>Personen met de meeste badges:</h3>
        <ul class="list-group">
            <li class="list-group-item">$person 1 met $badgeAmount badges!</li>
            <li class="list-group-item">$person 2 met $badgeAmount badges!</li>
            <li class="list-group-item">$person 3 met $badgeAmount badges!</li>
            <li class="list-group-item">$person 4 met $badgeAmount badges!</li>
            <li class="list-group-item">$person 5 met $badgeAmount badges!</li>
        </ul>
    </div>
{{-- End of leaderbord DIV --}}

 {{-- badge DIV --}}
    <div id="badgeDIV">
        <h3>Jouw badges:</h3>
        <ul class="list-group">
            {{-- foreach met erin de badges --}}
            @php
                //$badges = DB::table('achievementslist')->where('studentid', 1)->get()
                $badges = AchievementList::where('studentid', 1)->get();
            @endphp

            @foreach ($badges as $badge)
            <li class="list-group-item">{{$badge->id}} </li>
            {{ idToName($badge->id) }}
            
            @endforeach
            
        </ul>
    </div>
{{-- End of badge DIV --}}
</div>
</div>
@endsection

{{-- scripts --}}

{{-- script for leaderbord toggle --}}
<script>
function leaderbordToggle() {
var leaderbord = document.getElementById("leaderbordDIV");
var badge = document.getElementById("badgeDIV");

 if (leaderbord.style.display === "none") {
leaderbord.style.display = "block";
} else {
leaderbord.style.display = "none";
}

 if (badge.style.display = "block"){
badge.style.display = "none"
}
}
</script>

{{-- script for badge toggle --}}
<script>
function badgeToggle() {
var badge = document.getElementById("badgeDIV");
var leaderbord = document.getElementById("leaderbordDIV");
if (badge.style.display === "none") {
badge.style.display = "block";
} else {
badge.style.display = "none";
}

 if (leaderbord.style.display = "block"){
leaderbord.style.display = "none"
}
}
</script>

@endauth