<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('login');
});

Route::get('login', function () {
    return view('login');
});

Route::get('account', function () {
    return view('account');
});

Route::post('achievements.insert', [AchievementsController::class, 'store']);
Route::get('achievements.insert', [AchievementsController::class, 'insert']);
Route::get('achievements.index', [AchievementsController::class, 'index']);
Route::get('achievements.achievements', [AchievementsController::class, 'achievements']);

Route::get('user', [userController::class, 'levelSysteem']);
Route::post('task', [userController::class, 'createTask']);

Route::post('register', [RegisterController::class, 'store']);
Route::get('register', [RegisterController::class, 'index']);

Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('tasks', function () {
    return view('tasks');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
