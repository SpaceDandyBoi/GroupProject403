<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class Games extends Model {

    // do 'php artisan migrate:refresh --seed' to add the games to the db
    // and maybe you need to create the database in ur mysql
    // the database name is 'gameshowdb'
    public static function addall(){
        /*
        $url = 'https://api.rawg.io/api/games?key=4d2407eb2b4a49698cb46c1cbe99bbba&page=';
        $merged_response = array();

        for($x = 1; $x < 500; $x++){ //increase the numbers for more games
            $url = $url.$x;
            $response = json_decode(Http::get($url), true);
            $merged_response =  array_merge($response['results'], $merged_response);
        }
        */
        
        for($x = 1; $x < 500; $x++){
            $response = Http::get('https://api.rawg.io/api/games?key=febea05adb80464cafbdf3c51a1d4e6e&page='.$x);
            $games = json_decode($response, true)['results'];
            foreach($games as $game){
                $name = $game['name'];
                $slug = $game['slug'];
                $pageNum = $x;

                $data=array('name'=>$name, 'slug'=>$slug, 'pageNum'=>$pageNum);

                DB::table('games')->insert($data);
            }
        }
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

    public static function getPage($pageNum){
        $response = Http::get('https://api.rawg.io/api/games?key=febea05adb80464cafbdf3c51a1d4e6e&page='.$pageNum);
        $games = json_decode($response, true)['results'];
        return $games;
    }


    /* 
    //Khalid stuff
    public static function all(){
        $size = 1;
        $response = Http::get('https://api.rawg.io/api/games?key=febea05adb80464cafbdf3c51a1d4e6e&page='.$size);
        $games = json_decode($response, true)['results'];
        return $games;
    }

 */

}
