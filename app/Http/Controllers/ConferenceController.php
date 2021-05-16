<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{

    public function detailConferenceView(Conference $conference)
    {
        return view('conference.detail-conference', [
            'conference' => $conference,
        ]);
    }

}
