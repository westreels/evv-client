<?php

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

Route::any('/callback/dk/balanceTest', [App\Http\Controllers\EvolutionController::class, 'balance']);
Route::any('/callback/dk/getresultTest', [App\Http\Controllers\EvolutionController::class, 'getresult']);


Route::any('/callback/dkusd/balanceTest', [App\Http\Controllers\EvolutionController::class, 'balanceUSD']);
Route::any('/callback/dkusd/getresultTest', [App\Http\Controllers\EvolutionController::class, 'getresultUSD']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
