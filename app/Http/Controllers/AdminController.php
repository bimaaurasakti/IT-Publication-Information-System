<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jurnal;
use App\Models\Conference;
use App\Models\Journal;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{

    public function loginAdmin()
    {
        // halaman login admin
    }

    public function adminDataJournal()
    {
        return view('admin.admin-data-journal', [
            'journals' => Journal::get(),
        ]);
    }

    public function adminDataConference()
    {
        return view('admin.admin-data-conference', [
            'conferences' => Conference::get(),
        ]);
    }



    // tambah data view
    public function adminAddJournal()
    {
        return view('admin.admin-journal-create', [
            'journal' => new Journal(),
            'action' => 'add',
        ]);
    }

    public function adminStoreJournal()
    {
        // Validate the field
        $attr = request()->validate([
            'title' => 'required',
            'area' => 'required',
            'score' => 'required',
            'institute' => 'required',
            'link_website' => 'required',
        ]);

        // Assign title to the slug
        $attr['slug'] = \Str::slug(request('title'));
        
        // Add new Journal
        Journal::create($attr);

        session()->flash('success', 'The Journal was added');

        return back();
    }

    public function adminAddConference()
    {
        return view('admin.admin-form-conference', [
            'conference' => new Conference(),
            'action' => 'add',
        ]);
    }



    // edit data view
    public function adminEditJournal(Journal $journal)
    {
        return view('admin.admin-journal-edit', [
            'journal' => $journal,
            'action' => 'edit',
        ]);
    }

    public function adminUpdateJournal(Journal $journal)
    {
        // Validate the field
        $attr = request()->validate([
            'title' => 'required',
            'area' => 'required',
            'score' => 'required',
            'institute' => 'required',
            'link_website' => 'required',
        ]);

        $journal->update($attr);

        session()->flash('success', 'The Journal was updated');

        return redirect('admin/data-journal');
    }

    public function adminEditConference(Conference $conference)
    {
        $conference->date = date('Y-m-d', strtotime($conference->date));

        return view('admin.admin-form-conference', [
            'conference' => $conference,
            'action' => 'edit',
        ]);
    }

    // data tables view
    public function getJournals(Request $request)
    {
        if ($request->ajax()) {
            $data = Journal::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($journal){
                    $actionBtn = view('admin.admin-data-action-button', ['journal' => $journal, 'action' => 'journal']);
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function getConferences(Request $request)
    {
        if ($request->ajax()) {
            $data = Conference::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($conference){
                    $actionBtn = view('admin.admin-data-action-button', ['conference' => $conference, 'action' => 'conference']);
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

}
