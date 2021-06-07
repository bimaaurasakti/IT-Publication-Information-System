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
        return view('journal.detail-journal', [
            'journal' => $journal,
        ]);
    }

}
