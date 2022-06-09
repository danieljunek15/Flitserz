<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dienstenController extends Controller
{
    public function overzicht() 
    {
        return view('diensten');
    }
}
