<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\task;

class tasksController extends Controller
{
    // tasks
    public function index()
    {
        // $tasks = task::all()->get();
        $tasks = \DB::table('tasklist')->get();
        
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
        $challenges = \DB::table('tasklist')->where('id', $id)->get();
        return view('overzicht', [
            "challenges" => $challenges
        ]);
    }
}
