<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\ResumeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Games;


//home page
Route::get('/', function() {
    return view('Home');
});

//going to a specific page
Route::get('/games/{page}', [GameController::class, 'index']);

//going into game page
Route::get('/game/{slug}', [GameController::class, 'show']) ;

//going into most popular games page
Route::get('/mostPopularGames', [GameController::class, 'showMostPopular']) ;

//going into highest rated games page
Route::get('/highestRatedGames', [GameController::class, 'showHighestRated']) ;

//going into longest games page
Route::get('/longestGames', [GameController::class, 'showLongestGames']) ;

//going to search result
Route::get('/search', [GameController::class, 'searchGames']) ;

//going into feedback Page
Route::get('/feedback', [feedbackController::class, 'feedback']) ;

//going into feedback Page
Route::post('/feedback', [feedbackController::class, 'storeFeedback'])->name("storeFeedback") ;

//going into Contact Us Page
Route::get('/contactUs', function(){
    return view("contactUs");
});

//going into resume Page
Route::get('/resume/{name}', [ResumeController::class, 'show']);