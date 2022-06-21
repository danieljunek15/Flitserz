<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\ModelReview;
use Illuminate\Http\Request;

class UiReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelReview  $modelReview
     * @return \Illuminate\Http\Response
     */
    public function show(ModelReview $modelReview)
    {
        $reviewData = ModelReview::get();

        return view('reviewUi', [
            'reviewData' => $reviewData
        ]);
    }

    public function hideReview(Request $request, ModelReview $modelReview, $id)
    {
        ModelReview::where('id', $id)->update(array('status' => 'hidden'));
        return redirect('/ui/review');
    }

    public function showReview(Request $request, ModelReview $modelReview, $id)
    {
        ModelReview::where('id', $id)->update(array('status' => 'show'));
        return redirect('/ui/review');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelReview  $modelReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelReview $modelReview, $id)
    {
        $review = ModelReview::find($id);

        $deleteReview = $review->delete();

        if($deleteReview) {
            return back()->with('succes', 'review is deleted');
        }

        return back()->with('fail', 'Iets ging fout in ReviewController.php alstublieft E-mail Flitserz met deze error. Alvast bedankt');
        return redirect('/ui/review');
    }
}
