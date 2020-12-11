{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}


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
    {{-- Left task bar --}}
        <div class="col-2 border">
        <h3>Taken:</h3>
        <ul class="list-group">
            <li class="list-group-item">Taak 1</li>
            <li class="list-group-item">Taak 2</li>
            <li class="list-group-item">Taak 3</li>
            <li class="list-group-item">Taak 4</li>
            <li class="list-group-item">Taak 5</li>
            <li class="list-group-item">Taak 6</li>
            <li class="list-group-item">Taak 7</li>
            <li class="list-group-item">Taak 8</li>
            <li class="list-group-item">Taak 9</li>
            <li class="list-group-item">Taak 10</li>
        </ul>
        </div>

 {{-- middle collumn --}}
    <div class="col-5">
        <h3>Huidige taak: $currentTask</h3>
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
        <ul class="list-group">
{{-- foreach met erin de badges --}}
            <li class="list-group-item">badge 1</li>
            <li class="list-group-item">badge 2</li>
            <li class="list-group-item">badge 3</li>
            <li class="list-group-item">badge 4</li>
            <li class="list-group-item">badge 5</li>
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

