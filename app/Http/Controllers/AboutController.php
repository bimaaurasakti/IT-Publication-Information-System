<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendFeedbackRequest;
use Illuminate\Http\Request;
use App\Models\Feedback;

class AboutController extends Controller
{
    public function index()
    {
         return view('about');
    }
    
    public function sendFeedback(SendFeedbackRequest $request)
    {
        // dd($request->all());
        $attr = $request->all();

        Feedback::create($attr);

        session()->flash('success', 'Feedback was sended');

        return back();
    }
}
