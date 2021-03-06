<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendFeedbackRequest;
use Illuminate\Http\Request;
use App\Models\Feedback;
use RealRashid\SweetAlert\Facades\Alert;

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

        // session()->flash('success', 'Feedback was sended');

        Alert::success('Congrats', 'Feedback was sended');

        return back();
    }
}
