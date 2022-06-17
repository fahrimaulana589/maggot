<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\TutorialController;
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
           "page" => "data tidak ada"
        ]);
    });

Route::get("tutorials",[TutorialController::class,"getAll"])
    ->name("api.tutorials");

Route::get("tutorials/{tutorial}",[TutorialController::class,"get"])
    ->name("api.tutorials.show")
    ->missing(function (){
        return response()->json([
            "tutorial" => "data tidak ada"
        ]);
    });

Route::get("tutorials/{tutorial}/steps",[StepController::class,"getAll"])
    ->name("api.tutorials.steps");

Route::get("tutorials/{tutorial}/steps/{step}",[StepController::class,"get"])
    ->name("api.tutorials.steps.show")
    ->missing(function (){
        return response()->json([
            "step" => "data tidak ada"
        ]);
    });
