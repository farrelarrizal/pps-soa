<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ApplicationController;

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

// Application Services
Route::get('/application', [ApplicationController::class, 'index']);
Route::get('/application/approval/{id}', [ApplicationController::class, 'show']);


// API SERVICES
//Route::get('/api/student', [StudentServices::class, 'index']);

