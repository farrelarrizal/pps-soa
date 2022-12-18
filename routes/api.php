<?php

use App\Http\Controllers\StudentServices;
use App\Http\Controllers\ThesisServices;
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

Route::get('student', [StudentServices::class, 'index']);
Route::get('student/{id}', [StudentServices::class, 'show']);

Route::get('thesis', [ThesisServices::class, 'index']);
Route::get('thesis/{id}', [ThesisServices::class, 'show']);
Route::get('thesis/{id}', [ThesisServices::class, 'update']);

