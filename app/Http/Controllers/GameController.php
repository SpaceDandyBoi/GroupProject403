<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GameController extends Controller
{

    //show home page
    public function homePage(){
        $gameArray = ["red-dead-redemption-2","death-stranding","the-walking-dead-the-telltale-definitive-series","minecraft"];
        $GameRow=[];
        $GameExtra=[];
        for ($i=0; $i < 4; $i++) { 
            $GameRow1 = Games::where('slug', '=', $gameArray[$i])->get();
            $GameRow[$i] = $GameRow1[0];
            $GameExtra[$i] = self::getGameInfo($gameArray[$i]);
        }
        return view('Home', [
            'games' => $GameRow,
            'gameExtra' => $GameExtra
        ]);
    }

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
        $GameExtra = self::getGameInfo($slug);
        return view('game', [
            'game' => $GameRow[0],
            'gameExtra' => $GameExtra
        ]);
    }

    //show most popular games
    public function showMostPopular(){
        $gameLibrary = Games::select()->get();
        $Pgames= array($gameLibrary[1]);
        $counter=0;
        for ($x = 0; $x <= 1000; $x++){
            if ($gameLibrary[$x]['added']>= 10000) {
                $Pgames[$counter]=$gameLibrary[$x];
                $counter++;
            }
            if ($counter>=100) {
                break;
            }
        }
        return view('games', [
            'heading' => 'Most Popular Games',
            'games' => $Pgames
        ]);
    } 

        //show most Adedd games
        public function showMostAddedGames(){
            $gameLibrary = Games::select()->get()->sortByDesc("added");
            return view('charts', [
                'heading' => 'Game Order By Most Downloaded',
                'games' => $gameLibrary
            ]);
        } 

    //show highest rated games
    public function showHighestRated(){
        $gameLibrary = Games::select()->get();
        $Pgames= array($gameLibrary[1]);
        $counter=0;
        for ($x = 0; $x <= 1000; $x++){
            if ($gameLibrary[$x]['rating']>= 4.5) {
                $Pgames[$counter]=$gameLibrary[$x];
                $counter++;   
            }
            if ($counter>=100) {  
                break;
            }
        } 
        return view('games', [    
            'heading' => 'Highest Rated Games',
            'games' => $Pgames
        ]);
    }


    //show longest games
    public function showLongestGames(){
        $gameLibrary = Games::select()->get();
        $Pgames= array($gameLibrary[1]);
        $counter=0;
        for ($x = 0; $x <= 1000; $x++){
            if ($gameLibrary[$x]['playtime']>= 40) {
                $Pgames[$counter]=$gameLibrary[$x];
                $counter++;
            }
            if ($counter>=100) {
                break;
            }
         }
         return view('games', [
            'heading' => 'Longest Games',
            'games' => $Pgames
        ]);
    }

    //search games
    public function searchGames(){
        $Pgames= Games::where('name', 'like', '%' . request('search') . '%')
                    ->orWhere('slug', 'like', '%' . request('search') . '%')
                    ->orWhere('tags', 'like', '%' . request('search') . '%')->get();
        $gameArray = [];
        for ($x = 0; $x < count($Pgames); $x++){
            $gameArray[$x] = $Pgames[$x];
        }
        if (empty($gameArray)) {
            return view('games', [
                'heading' => 'Could not Find: '.request('search'),
                'games' => $gameArray
            ]);
        }
        return view('games', [
            'heading' => 'Results For: '.request('search'),
            'games' => $gameArray
        ]);
    }

    public static function DecodePics($pics){
        $jsonPics = "";
        foreach($pics as $pic){
          $jsonPics = $jsonPics.",".$pic['image'];
        }
        return $jsonPics;
      }

    public static function getGameInfo($slug){
        $auth = self::Authorization();
        $endpoint = "https://api.igdb.com/v4/games";
        $game = Http::withHeaders([
            'Client-ID' => 'hovszy2ipu4b6xbszfmdosszp8s9vh',
            'Authorization' => 'Bearer '.$auth
            ])->withBody(
            "fields summary,videos.*;
            where slug = \"{$slug}\";", 'txt'
            )->post($endpoint);
        $gameInfo = json_decode($game, true);
        
        if (empty($gameInfo[0]['summary'])){
            $summary = "There is no summary for this game.";
          } else {
            $summary = $gameInfo[0]['summary'];
          }
        if (empty($gameInfo[0]['videos'])){
            $video = "";
          } else {
            $video = "https://www.youtube.com/embed/".$gameInfo[0]['videos'][0]['video_id']."?controls=1";
          }
        return [$summary, $video];
    }

    public static function Authorization(){
        $auth = Http::post('https://id.twitch.tv/oauth2/token?client_id=hovszy2ipu4b6xbszfmdosszp8s9vh&client_secret=gqof66zxgihet6yah704g5mgmtbh4v&grant_type=client_credentials');
        return json_decode($auth, true)['access_token'];
    }
}
