<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedbacks;

class feedbackController extends Controller
{
    public function feedback()
    {
        return view('feedback');
    }

    public function storeFeedback(Request $request){

        echo $request;
        echo $request->first_name;

        $post = new feedbacks;
        $post->firstName=$request->first_name;
        $post->lastName=$request->last_name;
        $post->gender=$request->gender;

        $post->email=$request->email;
        $post->phone=$request->phone;
        $post->country=$request->country;
        $post->state=$request->state;
        $post->city=$request->city;
        $post->address=$request->address;

        $post->category=implode(',', $request->Categories);
        
        

        $post->subject=$request->subject;
        $post->message=$request->msg;

        $post->save();

        return back() -> with('message_sent', "You feedback has been sent");
    }
}
