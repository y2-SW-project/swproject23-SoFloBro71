<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/games', function () {
    return view('games');
})->middleware(['auth', 'verified'])->name('games');

require __DIR__.'/auth.php';


Route::get('/home', function () {
    return view('home');
});


Route::resource("/games", RetroController::class)->middleware(['auth']);

Route::get('/index', [RetroController::class, "index"])->middleware(["auth"]);
