<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index() {
        return view('conference/data-conference');
    }
}
