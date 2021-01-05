
<div>
    <h1>Achiement dashboard</h1>
</div>
<div>
    <h2>Alle Achievements</h2>
</div>
<div>
    <ul>
        @foreach ($achievements as $achievement)
            <li>{{$achievement['achievement']}} - exp: {{$achievement['experience']}}</li>
        @endforeach
      
    </ul>
</div>
<div>
      <a href="achievement.insert">Maak een nieuwe achievement aan</a>
</div>