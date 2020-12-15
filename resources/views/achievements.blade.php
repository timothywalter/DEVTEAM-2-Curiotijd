<h2>
    badges
</h2>

<form action="{{url('achievements')}}"  method="post">
    @csrf

    <div>
        <label for="badgeTitle">Achievement name:</label>
        <input type="text" name="badgeTitle">
    </div>
    
    <select name="expgain" id="">
        <option value="50">50xp</option>
        <option value="100">100xp</option>
        <option value="150">150xp</option>
        <option value="200">200xp</option>
    </select>

    <input type="submit" name="submit" value="Submit" />
</form>

