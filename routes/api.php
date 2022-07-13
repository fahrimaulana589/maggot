<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
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

Route::post('/login', [AuthController::class, 'login']);

Route::get('/login', function (){
    return response()->json(
        [
            "message" => "unauthorized"
        ],403
    );
})->name("api.login");

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user',[AuthController::class,"user"]);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get("profile",[ProfileController::class,"get"])
    ->name("api.profile");

Route::get("pages/{page:slug}",[PageController::class,"get"])
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
    ->name("api.tutorials.steps")
    ->missing(function (){
        return response()->json([
            "step" => "data tidak ada"
        ]);
    });;

Route::get("tutorials/{tutorial}/steps/{step}",[StepController::class,"get"])
    ->name("api.tutorials.steps.show")
    ->missing(function (){
        return response()->json([
            "step" => "data tidak ada"
        ]);
    });

Route::get("artikels",[ArtikelController::class,"getAll"])
    ->name("api.tutorials.artikels");

Route::get("artikels/{artikel}",[ArtikelController::class,"get"])
    ->name("api.tutorials.steps.show")
    ->missing(function (){
        return response()->json([
            "step" => "data tidak ada"
        ]);
    });
