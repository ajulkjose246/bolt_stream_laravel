<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $Mlist = DB::table('movies')->get();
    return view('home', [
        'movies' => $Mlist
    ]);
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/movie', function () {
    return view('movie');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/Mlist', function () {
    $Mlist = DB::table('movies')->get();
    return view('Mlist', [
        'movies' => $Mlist
    ]);
});
Route::post('/signup', [UserController::class, 'signup']);
Route::post('/signin', [UserController::class, 'signin']);
Route::post('/logout', [UserController::class, 'logout']);

Route::resource('movies', MovieController::class);

Route::get('/admin', [MovieController::class, 'index'])->name('admin');
// Route::get('/Mlist', [MovieController::class, 'index'])->name('mlist');
// Route::get('/Mlist', [MovieController::class, 'mlist'])->name('Mlist');
Route::get('/Mlist', [MovieController::class, 'Mlist'])->name('Mlist');


//movie pass by id
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movie.show');

Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit');
// update
Route::put('/movies/{id}', [MovieController::class, 'update'])->name('movies.update');
// Delete
Route::delete('/movies/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');
