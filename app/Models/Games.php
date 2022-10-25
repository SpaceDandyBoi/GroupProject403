<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class Games {
    public static function all(){
        $response = Http::get('https://api.rawg.io/api/games?key=febea05adb80464cafbdf3c51a1d4e6e');
        $games = json_decode($response, true)['results'];
        return $games;
    }

    public static function findGame($id){
        $game = self::all();

        foreach($game as $Games){
            if ($Games['id']==$id) {
                return $Games;
            }
        }
    }
}
