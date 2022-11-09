<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResumeController extends Controller
{


    //show single game
    public function show($name){
        return view('resume', [
            'devName' => $name
        ]);
    }

}
