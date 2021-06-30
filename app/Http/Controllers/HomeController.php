<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $journalTopImpact = Journal::orderByDesc('impact')->limit(3)->get();
        $journalLatestUpdate = Journal::latest()->limit(4)->get();

        return view('home', compact('journalLatestUpdate', 'journalTopImpact'));
    }
}
