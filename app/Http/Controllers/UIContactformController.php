<?php

namespace App\Http\Controllers;

use App\Models\ModelContactform;
use Illuminate\Http\Request;

class UIContactformController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
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
