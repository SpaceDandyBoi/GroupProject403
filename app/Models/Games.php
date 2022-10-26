<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class Games {

    // do 'php artisan migrate:refresh --seed' to add the games to the db
    // and maybe you need to create the database in ur mysql
    // the database name is 'gameshowdb'
    public static function addall(){
        $url = 'https://api.rawg.io/api/games?key=4d2407eb2b4a49698cb46c1cbe99bbba&page=';
        $merged_response = array();
        for($x = 1; $x < 5; $x++){ //increase the numbers for more games
            $url = $url.$x;
            $response = json_decode(Http::get($url), true);
            $merged_response =  array_merge($response['results'], $merged_response);
        }
        
        foreach($merged_response as $game){
            $name = $game['name'];
            $slug = $game['slug'];
            $released = $game['released'];
            $background_image = $game['background_image'];
            $rating = $game['rating'];
            $parent_platforms = $game['parent_platforms'];
            $ratings = $game['ratings'];
            $platforms = $game['platforms'];
            $genres = $game['genres'];
            $stores = $game['stores'];
            $tags = $game['tags'];
            $esrb_rating = $game['esrb_rating'];
            $short_screenshots = $game['short_screenshots'];

            $data=array('name'=>$name, 'slug'=>$slug, 'released'=>$released, 
            'background_image'=>$background_image, 'rating'=>$rating,
            'parent_platforms'=>json_encode($parent_platforms, true),
            'ratings'=>json_encode($ratings, true),
            'platforms'=>json_encode($platforms, true),
            'genres'=>json_encode($genres, true),
            'stores'=>json_encode($stores, true),
            'tags'=>json_encode($tags, true),
            'esrb_rating'=>json_encode($esrb_rating, true),
            'short_screenshots'=>json_encode($short_screenshots, true));

            DB::table('games')->insert($data);
        }
    }

    public static function all(){
        return json_decode(json_encode(DB::select('select * from games')), true);;
    }

    public static function find($slug){
        return json_decode(json_encode(DB::select('select * from games where slug='."'".$slug."'")), true)[0];
    }




    /* 
    //Khalid stuff
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
 */
}
