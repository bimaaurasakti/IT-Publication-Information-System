<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JournalController extends Controller
{

    public function index()
    {
        return view('journal.data-journal', [
            'journals' => Jurnal::get(),
        ]);
    }

    public function detailJournalView()
    {
        return view('journal.detail-journal');
    }

}
