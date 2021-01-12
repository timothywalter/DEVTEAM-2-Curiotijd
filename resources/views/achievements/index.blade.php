
<div>
    <h1>Achiement dashboard</h1>
</div>
<div>
    <h2>Alle Achievements</h2>
</div>
<div>
    <ul>
        
        @foreach ($achievements as $achievement)
            <li>{{$achievement['achievement']}} - exp: {{$achievement['experience']}}<a href="{{route('achievements.show', $achievement->id)}}"> View achievement</a></li>
        @endforeach
      
    </ul>
</div>
<div>
@if(Auth::user()->isTeacher == true)
      <a href="achievements.insert">Maak een nieuwe achievement aan</a>
@endif
</div>