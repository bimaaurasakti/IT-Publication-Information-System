<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{

    public function index()
    {
        return view('journal.data-journal', [
            'journals' => Journal::paginate(16),
        ]);
    }

    public function detailJournalView(Journal $journal)
    {
        $area       = explode(', ', $journal->area)[0];
        $similars   = Journal::Where('area', 'LIKE', '%'.$area.'%')->limit(3)->get();

        return view('journal.detail-journal', [
            'journal'   => $journal,
            'similars'  => $similars,
        ]);
    }

    public function searchJournal(Request $request)
    {
        if(isset($_GET['query'])){
            $search_data = $_GET['query'];
            $journals  = Journal::where('title', 'LIKE', '%'.$search_data.'%')
                                    ->orWhere('area', 'LIKE', '%'.$search_data.'%')
                                    ->paginate(16);
            $journals->appends($request->all());
            return view('journal.data-journal', [
                'journals' => $journals
            ]);
        } else {
            return view('journal.data-journal', [
                'journals' => Journal::paginate(16),
            ]);
        }
    }

}
