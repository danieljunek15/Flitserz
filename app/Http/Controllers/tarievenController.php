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

    public function popup(Request $request, $id)
    {
        if ($id == 1) {
            Session::flash("GeneralDiagnostics", "success");
            return redirect()->route('tarieven');
        } else {
            echo "False";
        }
    }
}
