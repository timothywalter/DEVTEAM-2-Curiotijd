<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        //haalt data uit de db op
        $login = DB::select("SELECT * FROM student");

        return view('login', [
            'login' => $login
        ]);
    }
    public function store(Request $request) {
        dd( $request->all() ); // dit is een soort var_dump($_POST)

    }
}
