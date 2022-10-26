<?php

use App\Http\Controllers\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Games;


//home page
Route::get('/', function() {
    return view('Home');
});

//going to a specific page
Route::get('/{page}', [GameController::class, 'index']);

//going into game page
Route::get('/game/{slug}', [GameController::class, 'show']) ;
