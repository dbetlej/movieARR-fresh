<?php

use App\Http\Controllers\Movies\MoviesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*t
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

//  Route::apiResource('movies', MoviesController::class);
    Route::get('movies', [MoviesController::class, 'index'])->name('movies.index');
    Route::get('movies/create', [MoviesController::class, 'create'])->name('movies.create');
    Route::post('movies', [MoviesController::class, 'store'])->name('movies.store');
    Route::get('movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');
    Route::get('movies/edit/{movie}', [MoviesController::class, 'edit'])->name('movies.edit');
    Route::put('movies/{movie}', [MoviesController::class, 'update'])->name('movies.update');
    Route::delete('movies/{movie}', [MoviesController::class, 'destroy'])->name('movies.destroy');
});
