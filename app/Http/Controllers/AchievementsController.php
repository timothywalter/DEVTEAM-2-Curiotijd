<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//deze namspace is nodig om gebruik te maken van de db class
use Illuminate\Support\Facades\DB;

class AchievementsController extends Controller
{
    public function index(){
        //haalt data uit de db op
        $achievments = DB::select("SELECT * FROM achievements");

        return view('achievements', [
            'achievements' => $achievments
        ]);
    }
    public function store(Request $request) {
        dd( $request->all() ); // dit is een soort var_dump($_POST)
    }
}
