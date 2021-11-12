<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\Jurnal;
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
        return view('journal.data-journal', [
            'journals'  => Journal::where('title', 'LIKE', '%'.$request->search.'%')
                                ->orWhere('area', 'LIKE', '%'.$request->search.'%')
                                ->paginate(16),
            'search'    => $request->search,
        ]);
    }

}
