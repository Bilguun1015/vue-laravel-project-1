<?php

use App\Http\Controllers\Api\BookableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// use this shortened routes for smaller app
// Route::get('bookables', function (Request $request) {
//     return Bookable::all();
// });

// Route::get('bookables/{id}', function(Request $request, $id) {
//     return Bookable::findOrFail($id);
// });

Route::get('bookables', [BookableController::class,'index']);
Route::get('bookables/{id}', [BookableController::class,'show']);