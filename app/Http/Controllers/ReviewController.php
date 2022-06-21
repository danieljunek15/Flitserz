<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\ModelReview;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'rating' => 'required|numeric',
            'content' => 'required|string'
        ]);
        $data['status'] = 'hidden';

        $reviewId = ModelReview::create($data);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelReview  $modelReview
     * @return \Illuminate\Http\Response
     */

    // is voor de UI
    public function show(ModelReview $modelReview)
    {

    }

    //is voor de user webpage
    public function showReviewPage(ModelReview $modelReview)
    {
        $reviewData = ModelReview::select('*')
            ->where('status', '=', 'show')
            ->get();
        //where status = show
        return view('revieuwShow', [
            'reviewData' => $reviewData
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelReview  $modelReview
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelReview $modelReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelReview  $modelReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelReview $modelReview)
    {

    }
}
