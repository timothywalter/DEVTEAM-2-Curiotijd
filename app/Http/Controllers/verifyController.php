<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\verify;

class verifyController extends Controller
{
    public function selectUnverifiedAccounts()
    {
        $accounts = DB::table('users')->where('verified', 0)->get();
        $allAccounts = DB::table('users')->get();
        
        return view('docentDashboard', [
            "accounts" => $accounts,
            "allAccounts" => $allAccounts
        ]);
    }
}
