<?php

use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\feedbackController;


//home page
Route::get('/', [GameController::class, 'homePage']) ;

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

//going to Charts page
Route::get('/charts', [GameController::class, 'showMostAddedGames']) ;

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

//show registeration form
Route::get('/register',[UserController::class,'create']);


//create new user
Route::post('/users',[UserController::class,'store']);

//Log user out
Route::post('/logout',[UserController::class,'logout']);


//Show login form
Route::get('/login',[UserController::class,'login']);

//Login user
Route::post('/users/authenticate', [UserController::class,'authenticate']);