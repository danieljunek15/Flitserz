<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/ui/ticked', [\App\Http\Controllers\ContactformController::class, 'show']);
Route::get('/ui/review', [\App\Http\Controllers\UiReviewController::class, 'show']);
Route::get('showRevieuw', [\App\Http\Controllers\ReviewController::class, 'showReviewPage']);  

//Dit zijn de DB edit linkjes voor de contactData van de UI
Route::get('/ui/ticked/delete/{id}', [\App\Http\Controllers\ContactformController::class, 'destroy']);
Route::get('/ui/ticked/update/{id}', [\App\Http\Controllers\ContactformController::class, 'update']);
Route::get('/ui/ticked/updateAgen/{id}', [\App\Http\Controllers\ContactformController::class, 'updateAgen']);

//Dit zijn de DB edit linkjes voor de reviewData van de UI
Route::get('/ui/review/delete/{id}', [\App\Http\Controllers\UiReviewController::class, 'destroy']);
Route::get('/ui/review/update/{id}', [\App\Http\Controllers\UiReviewController::class, 'hideReview']);
Route::get('/ui/review/updateAgen/{id}', [\App\Http\Controllers\UiReviewController::class, 'showReview']);

Route::get('/', [\App\Http\Controllers\indexController::class, 'overzicht']);
Route::get('/diensten', [\App\Http\Controllers\dienstenController::class, 'overzicht']);
Route::get('/over', [\App\Http\Controllers\overController::class, 'overzicht']);
Route::get('/tarieven', [\App\Http\Controllers\tarievenController::class, 'overzicht']);
Route::get('/contact', [\App\Http\Controllers\ContactformController::class, 'overzicht']);
Route::post('/contact/create', [\App\Http\Controllers\ContactformController::class, 'store']);
Route::post('/revieuw/create', [\App\Http\Controllers\ReviewController::class, 'store']);
// Route::get('/showRevieuw', [\App\Http\Controllers\controllerShowRevieuw::class, 'overzicht']);

Auth::routes();

// Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');

