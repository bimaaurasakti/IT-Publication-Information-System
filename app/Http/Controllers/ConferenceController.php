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
        if(isset($_GET['query'])){
            $search_data = $_GET['query'];
            $conferences = Conference::Where('name', 'LIKE', '%'.$search_data.'%')
                                        ->orWhere('long_name', 'LIKE', '%'.$search_data.'%')
                                        ->orWhere('area', 'LIKE', '%'.$search_data.'%')
                                        ->paginate(16);
            $conferences->appends($request->all());
            return view('conference.data-conference', [
                'conferences' => $conferences
            ]);
        } else {
            return view('conference.data-conference', [
                'conferences' => Conference::paginate(16)
            ]);
        }
    }

}
