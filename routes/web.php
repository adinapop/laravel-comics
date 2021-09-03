<?php

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
    // metto in una variabile l'array di giochi che me lo prende da config dal file php gameDb, che ho creato prima
    $arrayGames = config('gamesDb');
    return view('homepage', [
        'games' => $arrayGames
    ]);
})->name("home");

Route::get('/game/{id}', function ($id) {

    // aggiorno l'id con un valore posizionale
    $arrayIndex = $id - 1;
    $arrayGames = config('gamesDb');
    return view('game', [
        "arrayIndex" => $arrayIndex,
        'games' => $arrayGames
    ]);
})->name("game");