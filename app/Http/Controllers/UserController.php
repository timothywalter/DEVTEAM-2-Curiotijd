<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function levelSysteem() {
        $levelCounter= 0;
       // $users = DB::Select('select * from student WHERE id = 1');
       // $users = DB::table('student')->get();  // SELECT * FROM students
        $user = DB::table('student')->find(1); // SELECT * FROM STDUENT WHERE id = 2
        //$user = DB::table('student')->where('gender', 'm')->where('status', 'ingeschreven')->get(); 
        $xp = $user->experience;
        while  ($xp >= 100) {
                $levelCounter += 1;
                $xp -= 100;
            }
            return "level: " . $levelCounter . " en $xp XP";
        }

        
    }
