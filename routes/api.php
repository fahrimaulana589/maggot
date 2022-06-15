<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("profile",[ProfileController::class,"get"])
    ->name("api.profile");

Route::get("pages",[PageController::class,"getAll"])
    ->name("api.pages");

Route::get("pages/{page}",[PageController::class,"get"])
    ->name("api.pages.show")
    ->missing(function (){
        return response()->json([
           "data" => "data tidak ada"
        ]);
    });

Route::get("pages/search/{search}",[PageController::class,"search"])
    ->name("api.pages.search");
