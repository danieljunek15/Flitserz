<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\ModelReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
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

        return redirect('/')->withSuccess('You have succesfully created a review and we will review it as soon as possible.');
    }

    //is voor de user webpage
    public function showReviewPage(ModelReview $modelReview)
    {
        $reviewData = ModelReview::select('*')
            ->where('status', '=', 'show')
            ->get();
        //where status = show
        $session = Session::get('success');
        return view('revieuwShow', [
            'reviewData' => $reviewData,
            'success' => $session
        ]);
    }
}
