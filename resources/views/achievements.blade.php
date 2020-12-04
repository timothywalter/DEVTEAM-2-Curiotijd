<h2>
    badges
</h2>

<form action="{{url('achievements')}}"  method="post" enctype="multipart/form-data">
    @csrf
    Your Photo: <input type="file" name="image" size="25" />
    <input type="submit" name="submit" value="Submit" />
</form>

