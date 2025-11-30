<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function show($id)
    {
        return view('notes.show', compact('id'));
    }

}