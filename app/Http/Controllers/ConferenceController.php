<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::paginate(16);

        return view('conference.data-conference' ,compact('conferences'));
    }

    public function detailConferenceView(Conference $conference)
    {
        // dd($conference);
        $area       = explode(', ', $conference->area)[0];
        $similars   = Conference::Where('area', 'LIKE', '%'.$area.'%')->limit(3)->get();

        return view('conference.detail-conference', [
            'conference'    => $conference,
            'similars'      => $similars,
        ]);
    }

    public function searchConference(Request $request)
    {
        return view('conference.data-conference', [
            'conferences' => Conference::where('name', 'LIKE', '%'.$request->search.'%')
                                        ->orWhere('long_name', 'LIKE', '%'.$request->search.'%')
                                        ->orWhere('area', 'LIKE', '%'.$request->search.'%')
                                        ->paginate(16),
            'search' => $request->search,
        ]);
    }

}
