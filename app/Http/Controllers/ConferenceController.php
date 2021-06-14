<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('conference.data-conference' ,compact('conferences'));
    }

    public function detailConferenceView(Conference $conference)
    {
        return view('conference.detail-conference', [
            'conference' => $conference,
        ]);
    }

}
