@php
    use App\Models\Achievement;
    use App\Models\AchievementList;
    use App\Models\task;

    function idToName($achievementID){
        
        return;
    }

@endphp

@extends('layout.main')

<head>
    <link rel="stylesheet" href="css\dashboard-style.css">
</head>

@section('content')

<div class="container">
    <h1>dashboard</h1>
    <h2>Welkom bij Curiotijd, $name</h2>
    <hr>

    {{-- first row --}}
    <div class="row">

 {{-- left collumn --}}
    <div class="col-5 ml-4">
        <h2>Nieuwe accounts:</h2>
        <hr>
        <ol>
            @foreach ($accounts as $account)
                <li>name: {{$account->username}}
                    <br>
                klas: {{$account->Class}}</li>
                <div class="button-align">
                    <button class="btn btn-primary mr-3">Goedkeuren</button><button class="btn btn-primary mr-3"> afkeuren</button>
                </div>
                
                <hr>
            @endforeach
        </ol>
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
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi ab voluptate ducimus laudantium enim eum soluta explicabo commodi quisquam obcaecati sit saepe ipsam temporibus provident est, quae assumenda quidem voluptates?
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

