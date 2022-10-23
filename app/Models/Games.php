<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class Games {
    public static function all(){
        $response = Http::get('https://api.rawg.io/api/games?key=4d2407eb2b4a49698cb46c1cbe99bbba&dates=2019-09-01,2019-09-30&platforms=18,1,7');
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
