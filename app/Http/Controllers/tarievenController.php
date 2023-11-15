<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class tarievenController extends Controller
{
    public function overzicht() 
    { 
        return view('tarieven');
    }
}