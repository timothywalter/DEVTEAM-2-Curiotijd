<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\User;
use App\Models\task;
use Auth;

class UserController extends Controller
{
    public function levelSysteem() {
        $id = Auth::user()->id;
        $levelCounter= 1;
        $user = DB::table('users')->find($id); 
        $levelup = 100;
        $xp = $user->total_EXP;

        while  ($xp >= $levelup) {
                $levelCounter += 1;
                $xp -= $levelup;
                $levelup = $levelup + 20;    
            }

            $procentxpBar = $xp / $levelup * 100;
            $xptolevelup = $levelup - $xp; 

            // $id = Auth::user()->id;
            // $tasks = task::all()->get();
            $tasks = \DB::table('tasklist')->where('id', $id)->get();

            return view('dashboard',[
                "level" => $levelCounter,
                "experience" => $xp,
                "levelup" => $levelup,
                "xpbarprocent" => $procentxpBar,
                "xptolevelup" => $xptolevelup,
                'tasks' => $tasks
            ]);
                
        }

        public function createTask(Request $request) {
            $id = Auth::user()->id;
            db::table("tasklist")->insert([
                'task' => $request->task,
                'studentid' => $id,
                'deadline' => $request->deadline,
                'status' => $request->status
            ]);
            return redirect('dashboard');
        }

        public function deleteTask() {

        }

        public function verifyUser(Request $request){
            $user = User::findOrFail($request->id);
            $user->verified = 1;
            $user->save();

            return redirect()->route('docentDashboard');
        }

        public function dontVerifyUser(Request $request){
            $user = User::findOrFail($request->id);
            $user->verified = 0;
            $user->save();

            return redirect()->route('docentDashboard');
        }

        
    }
