<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\task;
use Auth;
// use App\Http\Auth;

class tasksController extends Controller
{
    // tasks
    public function index()
    {
        $id = Auth::user()->id;
        // $tasks = task::all()->get();
        $tasks = \DB::table('tasklist')->where('id', $id)->get();
        
        return view('dashboard', [
            'tasks' => $tasks
        ]);
    }

    public function students()
    {
        // $tasks = task::all()->get();
        $students = \DB::table('users')->get();
        
        return view('docentDashboard', [
            'students' => $students
        ]);
    }

    public function overzicht($id)
    {
        $challenges = \DB::table('tasklist')->where('studentid', $id)->get();
        $users = \DB::table('users')->where('id', $id)->get();
        return view('overzicht', [
            "challenges" => $challenges,
            "users" => $users
        ]);
    }
}
