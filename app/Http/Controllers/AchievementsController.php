<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//deze namspace is nodig om gebruik te maken van de db class
use Illuminate\Support\Facades\DB;
use App\Models\Achievement;

class AchievementsController extends Controller
{
    public function index(){
        //haalt data uit de db op
        $achievments = Achievement::all();

        return view('achievements.index', [
            'achievements' => $achievments
        ]);
    }
    public function insert(){
        return view('achievements.insert');
    }
    public function store(Request $request) {
        DB::table('achievements.insert')->insert(
            [
                'achievement' => $request['badgeTitle'],
                'experience' => $request['expgain'],
                'created_by' => 1
            ]
        );
        dd( $request->all() ); // dit is een soort var_dump($_POST)
    }
}