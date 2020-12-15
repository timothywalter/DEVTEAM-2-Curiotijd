<h1>Achiement dashboard</h1>
<ul>
    @foreach ($achievements as $achievement)
    <li>{{$achievement['achievement']}}</li>
    @endforeach
    <a href="achievement.insert">Maak een nieuwe achievement aan</a>
</ul>