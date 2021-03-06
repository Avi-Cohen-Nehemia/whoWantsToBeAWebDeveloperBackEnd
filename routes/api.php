<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Questions;
use App\Http\Controllers\API\Answers;
use App\Http\Controllers\API\Games;

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

Route::get('/questions', [Questions::class, "index"]);
Route::get('/questions/{difficulty}', [Questions::class, "show"]);

Route::get('/games/statistics', [Games::class, "show"]);
Route::post('/games/statistics', [Games::class, "store"]);
