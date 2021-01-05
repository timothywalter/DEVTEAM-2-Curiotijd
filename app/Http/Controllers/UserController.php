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
        $levelCounter= 1;
       // $users = DB::Select('select * from student WHERE id = 1');
       // $users = DB::table('student')->get();  // SELECT * FROM students
        $user = DB::table('student')->find(1); // SELECT * FROM STDUENT WHERE id = 2
        //$user = DB::table('student')->where('gender', 'm')->where('status', 'ingeschreven')->get(); 
        $levelup = 100;
        $xp = $user->experience;

        while  ($xp >= $levelup) {
                $levelCounter += 1;
                $xp -= $levelup;
                $levelup = $levelup + 20;    
            }

            $procentxpBar = $xp / $levelup * 100;
            $xptolevelup = $levelup - $xp; 
            // if ($procentxpBar < 0) {
            //     $procentxpBar = 1; 
            // }
            return view('xpbar',[
                "level" => $levelCounter,
                "experience" => $xp,
                "levelup" => $levelup,
                "xpbarprocent" => $procentxpBar,
                "xptolevelup" => $xptolevelup
            ]);
                
        }

        public function createTask(Request $request) {
            
            db::table("taskList")->insert([
                'task' => $request->task,
                'studentid' => 1,
                'deadline' => $request->deadline,
                'status' => $request->status
            ]);
            return redirect('dashboard');
        }

        public function deleteTask() {
            
        }

        
    }
