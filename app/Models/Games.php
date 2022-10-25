<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class Games {
    public static function all(){
        $size = 1;
        $response = Http::get('https://api.rawg.io/api/games?key=febea05adb80464cafbdf3c51a1d4e6e&page='.$size);
        $games = json_decode($response, true)['results'];
        return $games;
    }

    public static function getPage($pageNum){
        $response = Http::get('https://api.rawg.io/api/games?key=febea05adb80464cafbdf3c51a1d4e6e&page='.$pageNum);
        $games = json_decode($response, true)['results'];
        return $games;
    }



    public static function find($slug, $pageNum){
        $games = self::getPage($pageNum);
        foreach($games as $slugs){
            if ($slugs["slug"] == $slug){
                $game = $slugs;
            }
        }
        return $game;
    }
}
