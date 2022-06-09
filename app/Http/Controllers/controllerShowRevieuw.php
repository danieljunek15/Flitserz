<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerShowRevieuw extends Controller
{
    public function overzicht() 
    {
        return view('revieuwShow');
    }
}
