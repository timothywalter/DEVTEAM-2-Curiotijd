<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function index(){
        //haalt data uit de db op
        $register = DB::select("SELECT * FROM student");
        
        return view('register', [
            'register' => $register
        ]);
    }

   public function store(Request $request){
    DB::table('student')->insert(
    [
        'username' => $request['Username'],
        'password' => $request['Password'],
        'total_EXP' => 0,
        'Class' => $request['class']
    ]
    );
    return redirect('/');
   }
}