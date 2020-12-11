<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index(){
        //haalt data uit de db op
        $register = DB::select("SELECT * FROM student");

        return view('register', [
            'register' => $register
        ]);
    }
    public function store(Request $request) {
        dd( $request->all() ); // dit is een soort var_dump($_POST)

    }
}
