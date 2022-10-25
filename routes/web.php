<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Games;
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

Route::get('/', function() {
    return view('games', [
        'heading' => 'New and Trending Games',
        'games' => Games::all()
    ]);
});

Route::get('/game/{slug}', function($slug) {
    return view('game', [
        'game' => Games::find($slug)
    ]);
});