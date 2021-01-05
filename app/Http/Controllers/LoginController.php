<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Login;

class LoginController extends Controller
{
    public function index(){
        //haalt data uit de db op
        $students = DB::table('student')
        ->get();

        $students = Login::all();

        return view('/', [
            'login' => $students
        ]);
    }

    public function loginCheck()
    {

    }
  
}
   

