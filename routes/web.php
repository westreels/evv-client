<?php

use Illuminate\Support\Facades\Route;
use  \Illuminate\Routing\Middleware\ThrottleRequests;
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

Route::any('/frontend/evo/r2', [App\Http\Controllers\EvolutionController::class, 'main']);

Route::group(['middleware' => ['web']], function () {
	Route::post('/log', [App\Http\Controllers\EvolutionController::class, 'log']);
	Route::any('/setup', [App\Http\Controllers\EvolutionController::class, 'setup']);
	Route::any('/style', [App\Http\Controllers\EvolutionController::class, 'style']);
	Route::any('/config', [App\Http\Controllers\EvolutionController::class, 'config']);
	Route::get('/api/player/history/days', [App\Http\Controllers\EvolutionController::class, 'historyPlayer']);
	Route::get('/api/player/history/day/{date}', [App\Http\Controllers\EvolutionController::class, 'historyPlayerDay']);
	Route::get('/api/player/screenName', [App\Http\Controllers\EvolutionController::class, 'screenName']);
	Route::put('/api/player/screenName', [App\Http\Controllers\EvolutionController::class, 'screenNameSet']);
});
Route::any('/createPlayerAndSessionUSD', [App\Http\Controllers\EvolutionController::class, 'createPlayerAndSessionUSD']);

Route::any('/createPlayerAndSessionTest', [App\Http\Controllers\EvolutionController::class, 'createPlayerAndSession']);
Route::any('/fakeClient/{platform}', [App\Http\Controllers\EvolutionController::class, 'fakeClient']);


Route::any('/launch', [App\Http\Controllers\EvolutionController::class, 'startSessionExternal']);



Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);


