<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactformRequest;
use App\Models\ModelContactform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function overzicht()
    {
        return view('contactForm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('contactForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'telnummer' => 'required|numeric',
            'vragen' => 'required|string',
            'gemeente' => 'required|string'
        ]);
        $data['status'] = 'Open';
        $tickedId = ModelContactform::create($data);

        return redirect('/')->withSuccess('You have succesfully created a question, we will get in touch as soon as possible');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelContactform  $modelContactform
     * @return \Illuminate\Http\Response
     */
    public function show(ModelContactform $modelContactform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelContactform  $modelContactform
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelContactform $modelContactform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModelContactform  $modelContactform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelContactform $modelContactform)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelContactform  $modelContactform
     * @return \Illuminate\Http\Response
     */
    // public function destroy(ModelContactform $modelContactform)
    // {
    //     //
    // }
    public function destroy(ModelContactform $modelContactform)
    {
        //
    }
}
