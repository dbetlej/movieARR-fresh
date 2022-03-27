<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// User register
Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::get('/board', [Controller::class, 'board'])->name('board');

    // Movies
    Route::get('/movie/{movie}', [MovieController::class, 'show'])->name('movie');
    Route::put('/movie/{movie}', [MovieController::class, 'update']);
    Route::delete('/movie/{movie}', [MovieController::class, 'destroy']);
    Route::post('/movie', [MovieController::class, 'store']);
});
