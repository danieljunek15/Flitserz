<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactformRequest;
use App\Models\ModelContactform;
use Illuminate\Http\Request;

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
        if(is_numeric($request->telnummer)) {
            $tickedData = array(
                'name' => $request->name,
                'email' => $request->email,
                'telnummer' => $request->telnummer,
                'vragen' => $request->vragen,
                'gemeente' => $request->gemeente,
                'status' => 'Open'
            );
    
            $tickedId = ModelContactform::create($tickedData);
    
            return redirect('/');
        }
        echo 'Vul bij telefoon nummer alleen uw telefoon nummer <a href="/contact">Return</a>';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelContactform  $modelContactform
     * @return \Illuminate\Http\Response
     */
    public function show(ModelContactform $modelContactform)
    {
        $dataTicked = ModelContactform::get(); 

        return view('tickedUi', [
            'data' => $dataTicked
        ]);
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
    public function update(Request $request, ModelContactform $modelContactform, $id)
    {
        ModelContactform::where('id', $id)->update(array('status' => 'Closed'));
        return redirect('/ui/ticked');
    }

    public function updateAgen(Request $request, ModelContactform $modelContactform, $id)
    {
        ModelContactform::where('id', $id)->update(array('status' => 'Open'));
        return redirect('/ui/ticked');
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
    public function destroy(ModelContactform $modelContactform, $id)
    {
        $ticked = ModelContactform::find($id);

        $deletedTicked = $ticked->delete();

        if($deletedTicked) {
            return back()->with('success', 'ticked is deleted');
        }

        return back()->with('fail', 'Iets ging verkeerd user check effe in de code wat er niet klopt met de destroy function in ContactFormController.php in project Flitzers terwijl het eigenlijk Flitserz heet XD');
        return redirect('/ui/ticked');
    }
}
