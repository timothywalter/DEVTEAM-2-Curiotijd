<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function levelSysteem() {
        // if(!isset($_SESSION['gebruikersnaam'])) {
        //     exit;
        // }
        $levelCounter= 0;
       // $users = DB::Select('select * from student WHERE id = 1');
       // $users = DB::table('student')->get();  // SELECT * FROM students
        $user = DB::table('student')->find(1); // SELECT * FROM STDUENT WHERE id = 2
        //$user = DB::table('student')->where('gender', 'm')->where('status', 'ingeschreven')->get(); 
        $levelup = 100;
        $xp = $user->experience;
        while  ($xp >= $levelup) {
                $levelCounter += 1;
                $levelup = $levelup + 25;
                $xp -= $levelup;
            }
            return [
                "level" => $levelCounter,
                "experience" => $xp,
                "levelup" => $levelup
            ];
        }

        
    }
