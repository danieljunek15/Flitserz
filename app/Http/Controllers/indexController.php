<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class indexController extends Controller
{
    public function overzicht() 
    {
        $session = Session::get('success');
        return view('index', [
            'success' => $session
        ]);
    }
}
