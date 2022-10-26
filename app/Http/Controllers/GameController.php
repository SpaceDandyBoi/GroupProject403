<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;

class GameController extends Controller
{
    //show game page
    public function index($page){
        return view('games', [
            'heading' => 'New and Trending Games',
            'games' => Games::getPage($page)
        ]);
    }

    //show single game
    public function show($slug){
        $GameRow = Games::where('slug', '=', $slug)->get();
        return view('game', [
            'game' => Games::find($slug, $GameRow[0]['pageNum'])
        ]);
    }
}
