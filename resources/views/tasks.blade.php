@extends('layout.main')
<?php
  use Illuminate\Support\Facades\DB;

  $users = DB::table('student')->get();
  //dd($users);
  ?>
@section('title')
 task maken   
@endsection
<link rel="stylesheet" href="css/tasks.css">

@section('content')
    
<div class="test">
    <form action="{{ url('createTask') }}" method="POST">

      {{ csrf_field() }}
      <div class="form-group">
        <label for="text">Task: </label>
        <input type="text" name="task"><br>
      </div>
      <div class="form-group">
        <label for="text">Deadline: </label>
        <input type="date" name="deadline"><br>
      </div>
     
      <div class="form-group">
        <label for="text">status: </label>
        <select id="status" name="status">
        <option value="afgerond">Afgerond</option>
        <option value="bezig">Bezig</option>
        <option value="not_started">nog niet begonnen</option>
        </select></div>
      
      <div class="form-group">
      <select id="klasgenoten" name="klasgenoten" class="form-select">
        @foreach ($users as $user)
            <option value="{{$user->username}}">{{$user->username}}</option>
        @endforeach


      </select>
      </div>
      <input type="submit" class="btn btn-primary">
      
    </form>
</div>
@endsection