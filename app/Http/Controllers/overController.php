<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class overController extends Controller
{
    public function overzicht() 
    {
        return view('over');
    }
}
