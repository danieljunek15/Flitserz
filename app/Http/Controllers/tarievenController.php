<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tarievenController extends Controller
{
    public function overzicht() 
    {
        return view('tarieven');
    }
}
