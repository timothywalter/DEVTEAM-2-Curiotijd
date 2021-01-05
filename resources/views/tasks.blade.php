@extends('layout.main')
@section('title')
 task maken   
@endsection
<link rel="stylesheet" href="css/tasks.css">

@section('content')
    
<div class="test">
    <form action="{{ url('createTask') }}" method="POST">

      {{ csrf_field() }}
      <label for="text">Task: </label>
      <input type="text" name="task" maxlength="35" required><br>
      
      <label for="text">Deadline: </label>
      <input type="date" name="deadline" required><br>

      <label for="text">status: </label>
      <select id="status" name="status" required>
        <option value="afgerond">Afgerond</option>
        <option value="bezig">Bezig</option>
        <option value="not_started">nog niet begonnen</option>
      </select><br>
      <input type="submit">
    </form>
</div>
@endsection